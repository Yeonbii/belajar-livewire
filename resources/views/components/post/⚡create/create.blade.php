<div class="w-full max-w-lg m-auto mt-5 mb-10">
    <h1 class="text-3xl font-semibold mb-5">Buat Post</h1>
    
    <form wire:submit="save" class="border rounded-lg p-4 flex flex-col gap-4">
      @csrf
        <div class="flex flex-col gap-1">
            <label for="title" class="font-medium text-gray-700">Judul</label>
            <input type="text" id="title" wire:model="title" class="border rounded px-3 py-2 outline-none focus:ring-2 focus:ring-blue-500">
            @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
     
        <div class="flex flex-col gap-1">
            <label for="content" class="font-medium text-gray-700">Konten</label>
            <textarea id="content" wire:model="content" rows="5" class="border rounded px-3 py-2 outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            @error('content') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
     
        <div class="flex justify-end">
            <button type="submit" class="text-white bg-blue-600 hover:bg-blue-700 font-medium text-sm px-6 py-2.5 rounded-lg transition-colors">
                Simpan
            </button>
        </div>
    </form>
</div>
