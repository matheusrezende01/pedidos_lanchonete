<?php

use App\Livewire\ProdutoForm;
use App\Livewire\ProdutoList;
use Illuminate\Support\Facades\Route;

Route::get('/produtos/create', ProdutoForm::class);
Route::get('/produtos', ProdutoList::class);