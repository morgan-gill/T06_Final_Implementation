using mt.UserControls;
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

namespace mt
{
    /// <summary>
    /// Interaction logic for MainWindow.xaml
    /// </summary>
    public partial class MainWindow : Window
    {
        public MainWindow()
        {
            InitializeComponent();

            Login.LoginAdmin += new EventHandler<EventArgs>(Login_LoginAdmin); //event listeners for login screen
            Login.LoginEmployee += new EventHandler<EventArgs>(Login_LoginEmployee);
        }

        void Login_LoginAdmin(object sender, EventArgs e)
        {
            brdMain.Child = new AdminDashboard()    ;
        }

        void Login_LoginEmployee(object sender, EventArgs e)
        {
            brdMain.Child = new ProjectList();
        }
    }
}
