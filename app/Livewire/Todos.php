<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Title;

#[Title('Todos')]
class Todos extends Component
{
    public $todo = '';

    public $todos = [];

    public function updatedTodo($value)
    {
        $this->todo = Str::upper($value);
    }

    public function add()
    {
        if (empty($this->todo)) {
            return;
        }

        $this->todos[] = $this->todo;

        $this->reset('todo');
    }

    public function mount()
    {
        $this->todos = [
            'Learn Laravel',
            'Learn Vue',
            'Build Awesome Apps'
        ];
    }

    public function render()
    {
        return view('livewire.todos');
    }
}
