<?php

use Livewire\Component;

new class extends Component
{
    public $todos = [];
 
    public $todo = '';
 
    // public function mount()
    // {
    //     $this->todos = ['Buy groceries', 'Walk the dog', 'Write code']; 
    // }

    public function add()
    {
        // $this->todos[] = $this->todo;
 
        // $this->todo = '';

        // or

        // $this->reset('todo');

        // $this->todos[]= $this->pull('todo');
        
        // test
        strtolower($this->todo) === 'dd' ? (dd($this->todos)) : ($this->todos[]= $this->pull('todo'));
    }
    //
};
?>

<div>
    <input type="text" wire:model="todo" placeholder="Todo..."> 
 
    <button wire:click="add">Add Todo</button>
 
    <ul>
        @foreach ($todos as $todo)
            <li wire:key="{{ $loop->index }}">{{ $todo }}</li>
        @endforeach
    </ul>
</div>