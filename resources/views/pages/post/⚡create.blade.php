<?php
 
use Livewire\Component;
 
new class extends Component {
    // public $initialTitle = 'Initial Title';
};
?>

<div>
    {{-- <livewire:post.create title="Initial Title" /> --}}
    {{-- untuk nilai dinamis atau variable --}}
    {{-- <livewire:post.create :title="$initialTitle" /> --}}
    
    <livewire:post.create />
</div>