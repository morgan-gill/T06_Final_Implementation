using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Xml.Linq;
using System.Xml.Serialization;

namespace mt.Data
{
    class Projects
    {
        Projects()
        {
            List = new List<Project>();
        }

        Projects(IEnumerable<Project> projects)
        {
            List = projects.ToList();
        }

        public List<Project> List { get; set; }

        public static IEnumerable<Project> LoadFile(string path)
        {
            if (!File.Exists(path))
            {
                XElement element = new XElement("Projects");
                element.Save(path);
            }
            using (var file = File.OpenRead(path))
            {
                var projects = (Projects)new XmlSerializer(typeof(Projects)).Deserialize(file);
                Project.ResetPoolID(projects.List.Select(s => s.ID));
                return projects.List;
            }
        }


        public static void SaveFile(string path, IEnumerable<Project> projects)
        {
            var nameless = new XmlSerializerNamespaces();
            nameless.Add(string.Empty, string.Empty);

            using (var file = File.CreateText(path))
                new XmlSerializer(typeof(Projects)).Serialize(file, new Projects(projects), nameless);
        }
    }
}
