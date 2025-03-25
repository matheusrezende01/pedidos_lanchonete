<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoForm extends Component
{

    public $nome, $ingredientes, $valor, $imagem;

    protected $rules = [
        'nome' => 'required|min:3',
        'ingredientes' => 'required',
        'valor' => 'required|numeric|min:0',
        'imagem' => 'nullable|image|max:1024' 
    ];

    public function salvar()
    {
        $this->validate();

        $imagemPath = $this->imagem ? $this->imagem->store('produtos', 'public') : null;

        Produto::create([
            'nome' => $this->nome,
            'ingredientes' => $this->ingredientes,
            'valor' => $this->valor,
            'imagem' => $imagemPath,
        ]);

        session()->flash('message', 'Produto cadastrado com sucesso!');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.produto-form');
    }
}
    

