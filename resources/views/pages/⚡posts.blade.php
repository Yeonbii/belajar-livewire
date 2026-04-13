<?php

use App\Models\User;
use App\Models\Post;
use Livewire\Attributes\Computed;
use Livewire\Component;

new class extends Component {
    // 
};
?>

<div class="w-full max-w-lg m-auto my-10 px-5">
    <livewire:post.create />
    <livewire:post.list />
</div>
