using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace mt.Data
{
    class Employee : INotifyPropertyChanged
    {
        private static int lastID = 0;
        private static HashSet<int> IDs = new HashSet<int>();
        public static void ResetPoolID(IEnumerable<int> ids)
        {
            lastID = 0;
            IDs.Clear();
            IDs.UnionWith(ids);
        }

        public Employee()
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

        string _FirstName;
        public string FirstName
        {
            get => _FirstName;
            set
            {
                if (_FirstName != value)
                {
                    _FirstName = value;
                    RaisePropertyChanged("FirstName");
                }
            }
        }

        string _LastName;
        public string LastName
        {
            get => _LastName;
            set
            {
                if (_LastName != value)
                {
                    _LastName = value;
                    RaisePropertyChanged("LastName");
                }
            }
        }

        string _Address;
        public string Address
        {
            get => _Address;
            set
            {
                if (_Address != value)
                {
                    _Address = value;
                    RaisePropertyChanged("Address");
                }
            }
        }

        string _PhoneNumber;
        public string PhoneNumber
        {
            get => _PhoneNumber;
            set
            {
                if (_PhoneNumber != value)
                {
                    _PhoneNumber = value;
                    RaisePropertyChanged("PhoneNumber");
                }
            }
        }

        string _Email;
        public string Email
        {
            get => _Email;
            set
            {
                if (_Email != value)
                {
                    _Email = value;
                    RaisePropertyChanged("Email");
                }
            }
        }

        string _Password;
        public string Password
        {
            get => _Password;
            set
            {
                if (_Password != value)
                {
                    _Password = value;
                    RaisePropertyChanged("Password");
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

        string _Role;
        public string Role
        {
            get => _Role;
            set
            {
                if (_Role != value)
                {
                    _Role = value;
                    RaisePropertyChanged("Role");
                }
            }
        }

        int _RoleID;
        public int RoleID
        {
            get => _RoleID;
            set
            {
                if (_RoleID != value)
                {
                    _RoleID = value;
                    RaisePropertyChanged("RoleID");
                }
            }
        }

        string _LastLogin;
        public string LastLogin
        {
            get => _LastLogin;
            set
            {
                if (_LastLogin != value)
                {
                    _LastLogin = value;
                    RaisePropertyChanged("LastLogin");
                }
            }
        }
        
        void RaisePropertyChanged(string prop)
        {
            if (PropertyChanged != null) { PropertyChanged(this, new PropertyChangedEventArgs(prop)); }
        }
        public event PropertyChangedEventHandler PropertyChanged;
    }
}
