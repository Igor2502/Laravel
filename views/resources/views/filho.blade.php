@extends('layout.app')

@section('titulo', 'Minha página filho')

@section('barralateral')
    @parent
    <p>Esta parte é do filho</p>
@endsection

@section('conteudo')
    <p>Estte é o conteudo do filho</p>
@endsection