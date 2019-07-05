<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ola', function () {
    return "<h1>Seja Bem Vindo!!</h1>";
});

Route::get('/nome/{nome}/{sobrenome}', function($nome, $sn){
    return "<h1>Ola, $nome $sn!</h1>";
});

Route::get('/repetir/{nome}/{sobrenome}', function($nome, $sn){
    if(is_integer($sn)){
        for($i = 0; $i<$sn; $i++){
            echo "<h1>Ola, $nome!</h1>";
        }
    }
});

Route::get('/seunomecomregra/{nome}/{n}', function($nome, $n){
    for($i = 0; $i<$n; $i++){
        echo "<h1>Ola, $nome! ($i)</h1>";
    }
})->where('n', '[0-9]+')->where('nome', '[A-Za-z]+');

Route::get('/seunomesemregra/{nome?}', function($nome=null){
    if(isset($nome)) {    
        echo "<h1>Ola, $nome!</h1>";
    }
    else {
        echo "Voce nao passou nenhum nome";
    }
});


Route::prefix('app')->group(function() {
    Route::get("/", function() {
        return "Pagina principal do APP";
    });

    Route::get("profile", function() {
        return "Pagina profile do APP";
    });

    Route::get("about", function() {
        return "Pagina about do APP";
    });
});

Route::redirect('/aqui', '/ola', 301);

Route::view('/hello', 'hello');

Route::view('/viewnome', 'hellonome', 
            ['nome' => 'João', 'sobrenome' => 'Silva']
);

Route::get('/hellonome/{nome}/{sobrenome}', function($nome, $sn){
    return view('hellonome',
                ['nome' => $nome, 
                'sobrenome' => $sn]);
});














