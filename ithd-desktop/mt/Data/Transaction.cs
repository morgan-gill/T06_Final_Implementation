using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace mt.Data
{
    class Transaction : INotifyPropertyChanged
    {
        private static int lastID = 0;
        private static HashSet<int> IDs = new HashSet<int>();
        public static void ResetPoolID(IEnumerable<int> ids)
        {
            lastID = 0;
            IDs.Clear();
            IDs.UnionWith(ids);
        }

        public Transaction()
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

        string _TransactionDate;
        public string TransactionDate
        {
            get => _TransactionDate;
            set
            {
                if (_TransactionDate != value)
                {
                    _TransactionDate = value;
                    RaisePropertyChanged("TransactionDate");
                }
            }
        }

        double _TransactionAmount;
        public double TransactionAmount
        {
            get => _TransactionAmount;
            set
            {
                if (_TransactionAmount != value)
                {
                    _TransactionAmount = value;
                    RaisePropertyChanged("TransactionAmount");
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
        // This is ment to reveal what project the transaction is bound to.
        int _ProjectID;
        public int ProjectID
        {
            get => _ProjectID;
            set
            {
                if (_ProjectID != value)
                {
                    _ProjectID = value;
                    RaisePropertyChanged("ProjectID");
                }
            }
        }

        string _DateProcessed;
        public string DateProcessed
        {
            get => _DateProcessed;
            set
            {
                if (_DateProcessed != value)
                {
                    _DateProcessed = value;
                    RaisePropertyChanged("DateProcessed");
                }
            }
        }

        // This is intended to be filled with the name of the employee who processed the payment. (For record keeping)
        string _ProcessedBy;
        public string ProcessedBy
        {
            get => _ProcessedBy;
            set
            {
                if (_ProcessedBy != value)
                {
                    _ProcessedBy = value;
                    RaisePropertyChanged("ProcessedBy");
                }
            }
        }

        // Perhaps the term "Total" should be used?
        double _Amount;
        public double Amount
        {
            get => _Amount;
            set
            {
                if (_Amount != value)
                {
                    _Amount = value;
                    RaisePropertyChanged("Amount");
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
