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

    public Post $post;

    // dd($this->post) tidak bisa langsung di dalam class, mesti dilakukan dalam method
    // saran menggunakan method mount()
    // public function mount()
    // {
    //     dd($this->post);
    // }
};
?>

<div>
    <livewire:post.show :title="$post->title" :content="$post->content" />
</div>