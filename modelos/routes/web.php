<?php

use App\Categoria;

Route::get('/', function () {
    $categorias = Categoria::all();
    foreach($categorias as $c){
        echo "id: " . $c->id . ", ";
        echo "Nome: " . $c->nome . "<br>";
    }
});

Route::get('/inserir/{nome}', function($nome) {
    $cat = new Categoria();
    $cat->nome = $nome;
    $cat->save();
    return redirect('/');
});