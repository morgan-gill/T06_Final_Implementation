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
    /// Interaction logic for Login.xaml
    /// </summary>
    public partial class Login : UserControl
    {
        public Login()
        {
            InitializeComponent();
        }

        public event EventHandler<EventArgs> LoginAdmin; //events for MainWindow to handle
        public event EventHandler<EventArgs> LoginEmployee;

        private void BtnLogin_Click(object sender, RoutedEventArgs e)
        {
            if (txtUsername.Text == "admin" && txtPassword.Password != "") //dummy params
            {
                if (LoginAdmin != null)
                {
                    LoginAdmin(this, new EventArgs()); //emit event for admin login
                }
            }
            else if (txtUsername.Text == "employee" && txtPassword.Password != "") //dummy params
            {
                if (LoginEmployee != null)
                {
                    LoginEmployee(this, new EventArgs()); //emit event for employee login
                }
            }
        }


    }
}
