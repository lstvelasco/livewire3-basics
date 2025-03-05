<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class Posts extends Component
{
    public function destroy(Post $post)
    {
        $post->delete();
    }

    public function render()
    {
        $posts = Post::all();
        return view('livewire.posts', compact('posts'));
    }
}
