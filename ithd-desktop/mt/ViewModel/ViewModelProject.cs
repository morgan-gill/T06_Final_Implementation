using mt.Data;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.ComponentModel.DataAnnotations;
using System.Linq;

namespace mt.ViewModel
{
    class ViewModelProject : ViewModelBase, IDataErrorInfo
    {
        public Project Model { get; private set; }
        public ViewModelProject()
        {
            Model = new Project();
        }

        public ViewModelProject(Project model)
        {
            Model = model;
        }

        [Required]
        public int ID
        {
            get => Model.ID;
            set => Model.ID = value;
        }

        /*
        public string ProjectName
        {
            get => Model.ProjectName;
            set => Model.ProjectName = value;
        }

        public string ProjectAddress
        {
            get => Model.ProjectAddress;
            set => Model.ProjectAddress = value;
        }

        public string ProjectStartDate
        {
            get => Model.StartDate;
            set => Model.StartDate = value;
        }

        public string ProjectExpectedEndDate
        {
            get => Model.ExpectedEndDate;
            set => Model.ExpectedEndDate = value;
        }

        public string ProjectActualEndDate
        {
            get => Model.ActualEndDate;
            set => Model.ActualEndDate = value;
        }

        public string ProjectType
        {
            get => Model.ProjectType;
            set => Model.ProjectType = value;
        }

        public string ProjectStatus
        {
            get => Model.ProjectStatus;
            set => Model.ProjectStatus = value;
        }

        public string ProjectBillDate
        {
            get => Model.BillDate;
            set => Model.BillDate = value;
        }
        */

        string IDataErrorInfo.Error { get; }

        string IDataErrorInfo.this[string propertyName] => Validate(propertyName);

        private string Validate(string propertyName)
        {
            var value = GetType().GetProperty(propertyName).GetValue(this, null);
            var results = new List<System.ComponentModel.DataAnnotations.ValidationResult>();

            var context = new ValidationContext(this, null, null) { MemberName = propertyName };

            if(!Validator.TryValidateProperty(value, context, results))
            {
                return results.First().ErrorMessage;
            }

            return string.Empty;
        }
    }
}
