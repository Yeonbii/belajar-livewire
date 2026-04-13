<?php

use App\Models\Post;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;

new class extends Component {
    // #[Computed]
    // public function posts()
    // {
    //     return Post::with('user')->latest()->get();
    // }

    // #[On('post-created')]
    // public function refresh()
    // {
    //     // kosong pun gak masalah
    //     // ini hanya untuk trigger re-render
    // }

    public $posts;

    public function mount()
    {
        $this->posts = Post::with('user')->latest()->get();
    }

    #[On('post-created')]
    public function updatePostList()
    {
        $this->posts = Post::with('user')->latest()->get();
    }
};
?>

<div>
    @foreach ($posts as $post)
        <article wire:key="post-{{ $post->id }}">{{ $post->id }} - {{ $post->title }}</article>
    @endforeach
</div>
