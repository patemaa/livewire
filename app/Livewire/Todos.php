<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Todos')]
class Todos extends Component
{
    public $todo = '';
    public $todos = [
        'clean house',
        'feed hamster',
    ];

    function updatedTodo($value)
    {
        $this->todo = strtoupper($value);
    }

    public function render()
    {
        return view('livewire.todos');
    }

    public function add()
    {
        $this->todos[] = $this->todo;

        $this->reset('todo');
    }
}
