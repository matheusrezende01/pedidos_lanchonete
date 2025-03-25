<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GerenciamentoPedido extends Model
{
    protected $fillable = [
     'data_hora',
     'nome_cliente',
     'valor_total',
     'valor_desconto',
     'lista_itens_pedido ',
     'forma_pagamento',
     'listagem_pedido_cliente_logado',
     'listagem_pedidos ',
     'status'

    ];
}
