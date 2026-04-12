<?php

use Livewire\Component;
use App\Models\User;

new class extends Component
{
    public $users;
    
    public $title = "Users Page";
    
    public function mount()
    {
      $this->users = User::all();
    }
};
?>

<div>
  <h1>{{ $this->title }}</h1>
  <p>Jumlah User : {{ $this->users->count() }}</p>
</div>