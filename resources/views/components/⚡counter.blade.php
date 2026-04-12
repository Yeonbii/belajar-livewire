<?php

use Livewire\Component;

new class extends Component
{
    public $count = 1;
    
    public function increment()
    {
      $this->count++;
    }
    
    public function decrement()
    {
      $this->count--;
    }
    
};
?>

<div>
  <h1>{{ $count }}</h1>
  
  <button wire:click="increment" class="border p-2 m-1">+</button>
  <button wire:click="decrement" class="border p-2 m-1">-</button>
</div>