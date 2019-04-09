using mt.Helpers;
using System;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace mt.ViewModel
{
    class ViewModelMain : ViewModelBase
    {
        #region Flags
        bool _ProjectsOpen;
        public bool ProjectsOpen
        {
            get => _ProjectsOpen;
            set
            {
                ProjectsOpen = value;
                RaisePropertyChanged("ProjectsOpen");
            }
        }
        #endregion

        #region Collections
        public ObservableCollection<ViewModelProject> Projects { get; set; }
        #endregion

        #region RelayCommands
        public RelayCommand OpenProjectsCommand { get; set; }

        #endregion

        #region Constructor
        public ViewModelMain()
        {
            OpenProjectsCommand = new RelayCommand(OpenProjects);
        }
        #endregion

        #region Open Projects.xml
        void OpenProjects(object parameter)
        {
            string xmlPathProjects = Path.Combine(Environment.GetFolderPath(Environment.SpecialFolder.ApplicationData), "Projects.xml");
            var viewProjects = Data.Projects.LoadFile(xmlPathProjects).Select(s => new ViewModelProject(s));
            Projects = new ObservableCollection<ViewModelProject>(viewProjects);
            RaisePropertyChanged("Projects");
            ProjectsOpen = true;
        }
        #endregion
    }
}
