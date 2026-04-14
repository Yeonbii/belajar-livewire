<?php

use App\Models\Post;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

new class extends Component {
    use WithPagination;
    #[Computed]
    public function posts()
    {
      return Post::with('user')->latest()->paginate(5);
    }

    #[On('post-created')]
    #[On('post-deleted')]
    public function refresh()
    {
      
      $this->previousPage();
    }

    // public $posts;

    // public function mount()
    // {
    //     $this->posts = Post::with('user')->latest()->latest();
    // }

    // #[On('post-created')]
    // #[On('post-deleted')]
    // public function updatePostList()
    // {
    //     $this->posts = Post::with('user')->latest()->latest();
    // }
};
?>

<div id="paginated-post">
    @foreach ($this->posts as $post)
        <livewire:post.item :post="$post" wire:key="post-{{ $post->id }}" />
    @endforeach
    
    {{ $this->posts->links(data:['scroolTo' => '#paginated-post']) }}
</div>