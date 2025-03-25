<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoList extends Component
{
    public function render()
    {
        return view('livewire.produto-list', [
            'produtos' => Produto::all()
        ]);
    }
}