using mt.ViewModel;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Navigation;
using System.Windows.Shapes;

namespace mt.UserControls
{
    /// <summary>
    /// Interaction logic for Projects.xaml
    /// </summary>
    public partial class Projects : UserControl
    {
        public Projects()
        {
            InitializeComponent();
        }

        //private void Dashboard_Loaded(object sender, RoutedEventArgs e)
        //{
        //    ViewModelMain m = this.DataContext as ViewModelMain;
        //    if( m != null)
        //    {
        //        m.OpenProjects();
        //    }
        //}
    }
}
