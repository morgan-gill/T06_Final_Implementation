using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows;

namespace mt.ViewModel
{
    class ViewModelBase : INotifyPropertyChanged
    {

        //Base class for all ViewModel classes to inherit INotifyPropertyChanged interface
        internal void RaisePropertyChanged(string prop)
        {
            try
            {
                if (PropertyChanged != null) { PropertyChanged(this, new PropertyChangedEventArgs(prop)); }
            }
            catch (Exception e)
            {
                MessageBox.Show("Ooops, something went wrong! Please restart the app.");
            }
        }
        public event PropertyChangedEventHandler PropertyChanged;

    }
}
