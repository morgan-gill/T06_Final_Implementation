using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Input;

namespace mt.Helpers
{
        public class RelayCommand : ICommand
        {
            //Relay command implementation

            //Fields
            readonly Action<object> _execute;
            readonly Predicate<object> _canExecute;

            //Constructors
            public RelayCommand(Action<object> execute)
                : this(execute, null)
            {
            }

            public RelayCommand(Action<object> execute, Predicate<object> canExecute)
            {
                if (execute == null)
                    throw new ArgumentNullException("execute");

                _execute = execute;
                _canExecute = canExecute;
            }

            //ICommand Members:

            //Determines whether the command can be executed or not (UI element disabled when false)
            public bool CanExecute(object parameter)
            {
                return _canExecute == null ? true : _canExecute(parameter);
            }

            //Invoked when changes occur that can change whether or not the command can be executed
            public event EventHandler CanExecuteChanged
            {
                add { CommandManager.RequerySuggested += value; }
                remove { CommandManager.RequerySuggested -= value; }
            }

            //Runs the command logic
            public void Execute(object parameter)
            {
                _execute(parameter);
            }
        }
    }
