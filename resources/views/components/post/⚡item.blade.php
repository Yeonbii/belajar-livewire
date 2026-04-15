<?php

use Livewire\Component;

new class extends Component
{
    public $post;
    
    public function destroy()
    {
      $this->post->delete();
      // 🔥 kirim event
      $this->dispatch('post-deleted');
    }
};
?>

<article class="border rounded-lg p-4 shadow-sm bg-white flex flex-col gap-2 mb-5">

    {{-- Header --}}
    <div class="flex justify-between items-start">
        <div>
            <h2 class="text-lg font-semibold text-gray-800">
                {{ $post->title }}
            </h2>

            <p class="text-sm text-gray-500">
                oleh {{ $post->user->name ?? 'Unknown' }} • 
                {{ $post->created_at->diffForHumans() }}
            </p>
        </div>

        {{-- Tombol delete (opsional) --}}
        <button 
            wire:click="destroy"
            class="text-red-500 hover:text-red-700 text-sm"
        >
            Hapus
        </button>
    </div>

    {{-- Content --}}
    <div class="text-gray-700 text-sm leading-relaxed">
        {{ Str::limit($post->content, 150) }}
    </div>

    {{-- Footer --}}
    <div class="flex justify-between items-center mt-2">

        {{-- Link detail --}}
        <a 
            href="#"
            class="text-blue-600 hover:underline text-sm"
        >
            Lihat selengkapnya
        </a>

        {{-- Placeholder future fitur --}}
        <div class="text-xs text-gray-400">
            {{-- nanti bisa like / comment --}}
        </div>
    </div>

</article>