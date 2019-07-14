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
    echo "<hr>";

    $cats = DB::table('categorias')->where('id', 1)->get();
    foreach($cats as $c){
        echo "id: " . $c->id . "; ";
        echo "nome: " . $c->nome . "<br>";
    }
    echo "<hr>";

    $cats = DB::table('categorias')->where('id', 1)->first();
    echo "id: " . $cats->id . "; ";
    echo "nome: " . $cats->nome . "<br>";

    echo "<p>retorna um array utilizando like</p>";
    $cats = DB::table('categorias')->where('nome', 'like', '%p%')->get();
    foreach($cats as $c){
        echo "id: " . $c->id . "; ";
        echo "nome: " . $c->nome . "<br>";
    }

    echo "<p>sentenças lógicas</p>";
    $cats = DB::table('categorias')->where('id', 1)->orWhere('id', 2)->get();
    foreach($cats as $c){
        echo "id: " . $c->id . "; ";
        echo "nome: " . $c->nome . "<br>";
    }

    echo "<p>intervalos</p>";
    $cats = DB::table('categorias')->whereBetween('id', [1,2])->get();
    foreach($cats as $c){
        echo "id: " . $c->id . "; ";
        echo "nome: " . $c->nome . "<br>";
    }

    echo "<p>intervalos (negação)</p>";
    $cats = DB::table('categorias')->whereNotBetween('id', [1,2])->get();
    foreach($cats as $c){
        echo "id: " . $c->id . "; ";
        echo "nome: " . $c->nome . "<br>";
    }

    echo "<p>conjuntos</p>";
    $cats = DB::table('categorias')->whereIn('id', [1,3,4])->get();
    foreach($cats as $c){
        echo "id: " . $c->id . "; ";
        echo "nome: " . $c->nome . "<br>";
    }

    echo "<p>conjuntos (negação)</p>";
    $cats = DB::table('categorias')->whereNotIn('id', [1,3,4])->get();
    foreach($cats as $c){
        echo "id: " . $c->id . "; ";
        echo "nome: " . $c->nome . "<br>";
    }


    echo "<p>sentenças lógicas</p>";
    $cats = DB::table('categorias')->where([
        ['id', 1],
        ['nome', 'roupas']
    ])->get();
    foreach($cats as $c){
        echo "id: " . $c->id . "; ";
        echo "nome: " . $c->nome . "<br>";
    }

    echo "<p>ordenando por nome</p>";
    $cats = DB::table('categorias')->orderBy('nome')->get();
    foreach($cats as $c){
        echo "id: " . $c->id . "; ";
        echo "nome: " . $c->nome . "<br>";
    }

    echo "<p>ordenando por nome (decrescente)</p>";
    $cats = DB::table('categorias')->orderBy('nome', 'desc')->get();
    foreach($cats as $c){
        echo "id: " . $c->id . "; ";
        echo "nome: " . $c->nome . "<br>";
    }
});

Route::get('/novascategorias', function(){
    $id = DB::table('categorias')->insertGetId(
        ['nome'=>'Carros']
    );
    echo "Novo ID:  $id <br>";
});

Route::get('/atualizandocategorias', function(){
    $cats = DB::table('categorias')->where('id', 1)->first();
    echo "<p>Antes da Atualização</p>";
    echo "id: " . $cats->id . "; ";
    echo "nome: " . $cats->nome . "<br>";
    $cats = DB::table('categorias')->where('id', 1)
        ->update(['nome' => 'Roupas infantis']);
    $cats = DB::table('categorias')->where('id', 1)->first();
    echo "<p>Depois da Atualização</p>";
    echo "id: " . $cats->id . "; ";
    echo "nome: " . $cats->nome . "<br>";
});