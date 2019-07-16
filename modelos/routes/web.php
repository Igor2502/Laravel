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

Route::get('/categorias/{id}', function($id) {
    $cat = Categoria::find($id);//findOrFail
    if(isset($cat)){
        echo "id: " . $cat->id . ", ";
        echo "Nome: " . $cat->nome . "<br>";
    }
    else {
        echo "<h1>Categoria não encontrada</h1>";
    }    
});

Route::get('/atualizar/{id}/{nome}', function($id, $nome) {
    $cat = Categoria::find($id);//findOrFail
    if(isset($cat)){
        $cat->nome = $nome;
        $cat->save();
        return redirect('/');
    }
    else {
        echo "<h1>Categoria não encontrada</h1>";
    }    
});

Route::get('/remover/{id}', function($id) {
    $cat = Categoria::find($id);//findOrFail
    if(isset($cat)){
        $cat->delete();
        return redirect('/');
    }
    else {
        echo "<h1>Categoria não encontrada</h1>";
    }    
});