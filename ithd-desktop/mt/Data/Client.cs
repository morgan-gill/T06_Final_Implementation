using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace mt.Data
{
    class Client : INotifyPropertyChanged
    {
        private static int lastID = 0;
        private static HashSet<int> IDs = new HashSet<int>();
        public static void ResetPoolID(IEnumerable<int> ids)
        {
            lastID = 0;
            IDs.Clear();
            IDs.UnionWith(ids);
        }

        public Client()
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

        string _RegistrationDate;
        public string RegistrationDate
        {
            get => _RegistrationDate;
            set
            {
                if (_RegistrationDate != value)
                {
                    _RegistrationDate = value;
                    RaisePropertyChanged("RegistrationDate");
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
