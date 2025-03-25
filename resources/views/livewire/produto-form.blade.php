<div class="max-w-lg mx-auto p-4 bg-white shadow-md rounded">
    @if (session()->has('message'))
        <div class="bg-green-500 text-white p-2 mb-2 rounded">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="salvar" enctype="multipart/form-data">
        <div class="mb-4">
            <label class="block text-gray-700 font-semibold">Nome:</label>
            <input type="text" wire:model="nome" class="w-full border rounded p-2">
            @error('nome') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold">Ingredientes:</label>
            <textarea wire:model="ingredientes" class="w-full border rounded p-2"></textarea>
            @error('ingredientes') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold">Valor:</label>
            <input type="number" wire:model="valor" step="0.01" class="w-full border rounded p-2">
            @error('valor') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold">Imagem:</label>
            <input type="file" wire:model="imagem" class="w-full border p-2 rounded">
            @error('imagem') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

            @if ($imagem)
                <div class="mt-2">
                    <img src="{{ $imagem->temporaryUrl() }}" class="rounded shadow-md" width="100">
                </div>
            @endif
        </div>

        <button type="submit" class="bg-blue-500 text-white p-2 rounded hover:bg-blue-600 w-full">
            Salvar Produto
        </button>
    </form>
</div>
