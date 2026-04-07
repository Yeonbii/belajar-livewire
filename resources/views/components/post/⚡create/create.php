<?php

use Livewire\Component;

new class extends Component
{
    public $title;
 
    // selama nama prop-nya sama, maka bisa tidak menggunakan mount
    // public function mount($title = null)
    // {
    //     $this->title = $title;
    // }
 
    public function save()
    {
        $this->validate([
            'title' => 'required|min:3',
        ]);

        dd($this->title);
    }
};
