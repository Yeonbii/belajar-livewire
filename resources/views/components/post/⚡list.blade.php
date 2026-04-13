<?php

use Livewire\Component;
use App\Models\Post;

new class extends Component
{
    public $users;
    
    public $title = "Posts Page";
    
    public function mount()
    {
      $this->posts = Post::with('user')->latest()->get();
      
      // dd($this->posts);
    }
    
    public function render()
    {
      $this->posts = Post::with('user')->latest()->get();
    }
};
?>

<div>
  <ul>
    @foreach ($this->posts as $post)
      <li>
        {{ $post->id }}
      </li>
    @endforeach
  </ul>
</div>