<?php

use Livewire\Component;

new class extends Component
{
    public $title;
    public $content;
};
?>

<div>
    <h1 class="text-3xl font-bold">{{ $this->title }}</h1>
    <p>{{ $this->content }}</p>
</div>