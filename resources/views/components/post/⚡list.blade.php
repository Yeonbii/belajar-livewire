<?php

use App\Models\Post;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

new class extends Component {
    use WithPagination, WithoutUrlPagination;

    #[Computed]
    public function posts()
    {
        return Post::with('user')->latest()->paginate(5);
    }

    #[On('post-created')]
    public function goToFirstPage()
    {
        $this->resetPage();
    }

    #[On('post-deleted')]
    public function stayOrBack()
    {
      // Memanggil property Computed
      // Jika di dalam class gunakan $this->posts()
      // Jika di dalam view gunakan $this->posts
      if ($this->posts()->isEmpty() && $this->getPage() > 1)
      {
        $this->previousPage();
      }
    }

    // #[On('post-created')]
    // #[On('post-deleted')]
    // public function refresh()
    // {
    //   // $this->previousPage();
    // }

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

<div id="paginated-post" class="pt-5 -mt-5">
  <h3 class="text-2xl font-semibold mb-5">Post</h3>
    @foreach ($this->posts as $post)
        <livewire:post.item :post="$post" wire:key="post-{{ $post->id }}" />
    @endforeach

    {{ $this->posts->links(data: ['scrollTo' => '#paginated-post']) }}
</div>
