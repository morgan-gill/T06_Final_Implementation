using System;
using System.Collections.Generic;
using System.Data.SqlClient;
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
    /// Interaction logic for AdminDashboard.xaml
    /// </summary>
    public partial class AdminDashboard : UserControl
    {
        public AdminDashboard()
        {
            // attempting to connecto to Local DataBase. (localhost:3306 or 127.0.0.1:3306)
            /*
            try
            {
                //SqlConnection thisConnection = new SqlConnection(@"Server=(local);Database=db_ithd;Trusted_Connection=Yes;");
                //thisConnection.Open();

                SqlConnection thisConnection = new SqlConnection("server=127.0.0.1;user id=root;persistsecurityinfo=False;database=db_ithd");
                thisConnection.Open();

                //Data Source = 190.190.200.100,1433; Network Library = DBMSSOCN;
                //Initial Catalog = myDataBase; User ID = myUsername; Password = myPassword;

                string Get_Data = "SELECT * FROM clients";

                SqlCommand cmd = thisConnection.CreateCommand();
                cmd.CommandText = Get_Data;

                //SqlDataAdapter sda = new SqlDataAdapter(cmd);
                //DataTable dt = new DataTable("emp");
                // sda.Fill(dt);

                //dataGrid1.ItemsSource = dt.DefaultView;
            }
            catch
            {
                MessageBox.Show("db error");
            }
            // ^ attempting to connecto to Local DataBase. (localhost:3306 or 127.0.0.1:3306) ^
            */
            InitializeComponent();
        }

        //public event 
    }
}
