<?php

namespace App\Livewire;

use Livewire\Component;

class Todo extends Component
{
    public $todo = '';
    public $todos = [];

    public function mount()
    {
        $this->todos = [
            'clean kitchen',
            'read books',
            'bake a cake',
        ];
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
