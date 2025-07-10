<?php

namespace App\Livewire;

use Livewire\Component;

class Todo extends Component
{
    public $todo = '';
    public $todos = [];

    function updatedTodo($value)
    {
        $this->todo = strtoupper($value);
    }

    public function render()
    {
        return view('livewire.todo');
    }

    public function add()
    {
        $this->todos[] = $this->todo;

        $this->reset('todo');
    }
}
