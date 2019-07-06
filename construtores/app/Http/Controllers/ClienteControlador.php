<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteControlador extends Controller
{
    
    public function index()
    {
        return "Lista de todos os Clientes - Raiz";
    }

    public function create()
    {
        return "Formulário para cadastrar novo cliente";
        //return view('formulariocadastro');
    }

    public function store(Request $request)
    {
        $s = "Armazenar: ";
        $s .= "Nome: " . $request->input('nome') . " e ";
        $s .= "Idade: " . $request->input('idade');
        return response($s, 201);
    }

    public function show($id)
    {
        $v = ['Mario', 'Edson', 'Roberto', 'Jean'];
        if($id >= 0 && $id < count($v))
            return $v[$id];
        return "Não encontrado";
    }

    public function edit($id)
    {
        return "Formulario para editar cliente com ID " . $id;
    }

    public function update(Request $request, $id)
    {
        $s = "Atualizar cliente com id $id: ";
        $s .= "Nome: " . $request->input('nome') . " e ";
        $s .= "Idade: " . $request->input('idade');
        return response($s, 200);
    }

    public function destroy($id)
    {
        return response("Apagado cliente com id $id", 200);
    }

    public function requisitar(Request $request) {
        echo "nome:" . $request->input('nome');
    }
}
