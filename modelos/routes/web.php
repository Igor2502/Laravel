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

Route::get('/categoriapornome/{nome}', function($nome) {
    $cat = Categoria::where('nome', $nome)->get();
    foreach($cat as $c){
        echo "id: " . $c->id . ", ";
        echo "Nome: " . $c->nome . "<br>";
    }  
});

Route::get('/categoriaidmaiorque/{id}', function($id) {
    $cat = Categoria::where('id', '>', $id)->get();
    foreach($cat as $c){
        echo "id: " . $c->id . ", ";
        echo "Nome: " . $c->nome . "<br>";
    }  

    $count = Categoria::where('id', '>', $id)->count();
    echo "<h1>Count: $count </h1>";

    $max = Categoria::where('id', '>', $id)->max('id');
    echo "<h1>Max: $max </h1>";
});

Route::get('/ids123', function() {
    $cat = Categoria::find([1, 2, 3]);
    foreach($cat as $c){
        echo "id: " . $c->id . ", ";
        echo "Nome: " . $c->nome . "<br>";
    }  
});