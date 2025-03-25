<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 p-4">
    @foreach ($produtos as $produto)
        <div class="bg-white shadow-md rounded-lg p-4 border">
            @if ($produto->imagem)
                <img src="{{ asset('storage/' . $produto->imagem) }}" class="w-full h-40 object-cover rounded-md mb-3">
            @endif
            
            <h2 class="text-lg font-bold text-gray-800">{{ $produto->nome }}</h2>
            <p class="text-gray-600">{{ $produto->ingredientes }}</p>
            <p class="text-green-600 font-semibold mt-2">R$ {{ number_format($produto->valor, 2, ',', '.') }}</p>
        </div>
    @endforeach
</div>