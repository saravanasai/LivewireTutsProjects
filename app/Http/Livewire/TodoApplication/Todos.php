<?php

namespace App\Http\Livewire\TodoApplication;

use App\Models\TodoApplication\Todos as TodoApplicationTodos;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Todos extends Component
{

    public string $todoText = "";

    public bool $disable = true;

    public Collection $todos;


    public function mount()
    {

        $this->loadTodos();
    }

    public function loadTodos()
    {
        $this->todos = TodoApplicationTodos::orderBy('created_at', 'DESC')->get();
    }


    public function toggleCompletion($id)
    {
        $todo = TodoApplicationTodos::find($id);

        $todo->update([
            "is_completed" => !$todo->is_completed
        ]);

        $this->loadTodos();
    }


    public function deleteTodo($id)
    {
        TodoApplicationTodos::destroy($id);
        $this->loadTodos();
    }

    public function addTodo()
    {

        TodoApplicationTodos::create([
            "todo_text" => $this->todoText
        ]);

        $this->loadTodos();
        $this->todoText = "";
        $this->disable = true;
    }


    public function updated($property)
    {

        if (!$this->todoText == "") {
            $this->disable = false;
        }
        else{
            $this->disable = true;
        }

    }
    public function render()
    {
        return view('livewire.todo-application.todos');
    }
}
