<?php

use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categorias', function(){
    $cats = DB::table('categorias')->get();
    foreach($cats as $c){
        echo "id: " . $c->id . "; ";
        echo "nome: " . $c->nome . "<br>";
    }
    echo "<hr>";

    $nomes = DB::table('categorias')->pluck('nome');
    foreach($nomes as $nome){
        echo "$nome <br>";
    }
});
