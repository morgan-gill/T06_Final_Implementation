using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace mt.Data
{
    class Project : INotifyPropertyChanged
    {
        private static int lastID = 0;
        private static HashSet<int> IDs = new HashSet<int>();
        public static void ResetPoolID(IEnumerable<int> ids)
        {
            lastID = 0;
            IDs.Clear();
            IDs.UnionWith(ids);
        }

        public Project()
        {
            do
            {
                ID = lastID++;
            } while (IDs.Add(ID) == false);
        }

        int _ID;
        public int ID
        {
            get => _ID;
            set
            {
                if (_ID != value)
                {
                    _ID = value;
                    RaisePropertyChanged("ID");
                }
            }
        }

        int _UserID;
        public int UserID
        {
            get => _UserID;
            set
            {
                if (_UserID != value)
                {
                    _UserID = value;
                    RaisePropertyChanged("UserID");
                }
            }
        }

        string _ProjectFileName;
        public string ProjectFileName
        {
            get => _ProjectFileName;
            set
            {
                if (_ProjectFileName != value)
                {
                    _ProjectFileName = value;
                    RaisePropertyChanged("ProjectFileName");
                }
            }
        }

        string _ProjectMime;
        public string ProjectMime
        {
            get => _ProjectMime;
            set
            {
                if (_ProjectMime != value)
                {
                    _ProjectMime = value;
                    RaisePropertyChanged("ProjectMime");
                }
            }
        }

        string _ProjectOriginalFileName;
        public string ProjectOriginalFileName
        {
            get => _ProjectOriginalFileName;
            set
            {
                if (_ProjectOriginalFileName != value)
                {
                    _ProjectOriginalFileName = value;
                    RaisePropertyChanged("ProjectOriginalFileName");
                }
            }
        }

        string _CreatedAt;
        public string CreatedAt
        {
            get => _CreatedAt;
            set
            {
                if (_CreatedAt != value)
                {
                    _CreatedAt = value;
                    RaisePropertyChanged("CreatedAt");
                }
            }
        }

        string _UpdatedAt;
        public string UpdatedAt
        {
            get => _UpdatedAt;
            set
            {
                if (_UpdatedAt != value)
                {
                    _UpdatedAt = value;
                    RaisePropertyChanged("UpdatedAt");
                }
            }
        }

        /*
        string _ProjectName;
        public string ProjectName
        {
            get => _ProjectName;
            set
            {
                if (_ProjectName != value)
                {
                    _ProjectName = value;
                    RaisePropertyChanged("ProjectName");
                }
            }
        }

        string _ProjectAddress;
        public string ProjectAddress
        {
            get => _ProjectAddress;
            set
            {
                if (_ProjectAddress != value)
                {
                    _ProjectAddress = value;
                    RaisePropertyChanged("ProjectAddress");
                }
            }
        }

        string _StartDate;
        public string StartDate
        {
            get => _StartDate;
            set
            {
                if (_StartDate != value)
                {
                    _StartDate = value;
                    RaisePropertyChanged("StartDate");
                }
            }
        }

        string _ExpectedEndDate;
        public string ExpectedEndDate
        {
            get => _ExpectedEndDate;
            set
            {
                if (_ExpectedEndDate != value)
                {
                    _ExpectedEndDate = value;
                    RaisePropertyChanged("ExpectedEndDate");
                }
            }
        }

        string _ActualEndDate;
        public string ActualEndDate
        {
            get => _ActualEndDate;
            set
            {
                if (_ActualEndDate != value)
                {
                    _ActualEndDate = value;
                    RaisePropertyChanged("ActualEndDate");
                }
            }
        }

        string _BillDate;
        public string BillDate
        {
            get => _BillDate;
            set
            {
                if (_BillDate != value)
                {
                    _BillDate = value;
                    RaisePropertyChanged("BillDate");
                }
            }
        }

        string _ProjectType;
        public string ProjectType
        {
            get => _ProjectType;
            set
            {
                if (_ProjectType != value)
                {
                    _ProjectType = value;
                    RaisePropertyChanged("ProjectType");
                }
            }
        }

        string _ProjectStatus;
        public string ProjectStatus
        {
            get => _ProjectStatus;
            set
            {
                if (_ProjectStatus != value)
                {
                    _ProjectStatus = value;
                    RaisePropertyChanged("ProjectStatus");
                }
            }
        }
        */

        void RaisePropertyChanged(string prop)
        {
            if (PropertyChanged != null) { PropertyChanged(this, new PropertyChangedEventArgs(prop)); }
        }
        public event PropertyChangedEventHandler PropertyChanged;
    }
}
