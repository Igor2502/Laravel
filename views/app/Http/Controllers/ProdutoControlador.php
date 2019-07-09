<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoControlador extends Controller
{
    public function listar() {
        $produtoss = [
            "Notebook Asus i7 16GB",
            "Mouse e Teclado Microsoft USB",
            "Monitor 21 - Samsung",
            "Impressora HP",
            "Disco SSD 512GB"
        ];

        $produtos = [];
        return view('produtos', compact('produtos'));
    }

    public function secaoproduto($palavra){
        return view('secaoprodutos', compact('palavra'));
    }
}
