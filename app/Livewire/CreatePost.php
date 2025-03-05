<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Rule;

class CreatePost extends Component
{
    #[Rule('required', as: 'da title')]
    #[Rule('min:4', message: 'Yo, too short')]
    public $title = '';


    #[Rule('required')]
    public $content = '';

    public function save()
    {
        $this->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        $this->redirect(route('posts.index'), navigate: true);
    }

    
    public function render()
    {
        return view('livewire.create-post');
    }
}
