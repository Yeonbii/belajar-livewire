<?php

use App\Models\Post;
use Livewire\Component;

new class extends Component
{
    // public $postId;
 
    // public function mount($id)
    // {
    //     $this->postId = $id;
    // }

    public Post $post; // Automatically bound from route
 
    // No mount() needed - Livewire handles it automatically
};
?>

<div>
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
</div>