<?php

use App\Models\User;
use App\Models\Post;
use Livewire\Component;

new class extends Component
{
    // selama nama prop-nya sama, maka bisa tidak menggunakan mount()
    // public function mount($title = null)
    // {
    //     $this->title = $title;
    // }
    
    public $title = '';
    public $content = '';
    public $user_id;
 
    public function save()
    {
        $this->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);
        
        $this->user_id = User::query()->inRandomOrder()->value('id');
 
        // dd($this->title, $this->content, $this->user_id);
        Post::create([
            'title' => $this->pull('title'),
            'content' => $this->pull('content'),
            'user_id' => $this->pull('user_id')
        ]);
    }
};
