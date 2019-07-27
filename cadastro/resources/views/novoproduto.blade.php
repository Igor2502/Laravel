@extends('layout.app', ["current" => "produtos"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="/produtos" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeProduto">Nome do Produto</label>
                    <input type="text" class="form-control" name="nomeProduto" id="nomeProduto" placeholder="Produto">
                    <label for="nomeProduto">Estoque</label>
                    <input type="text" class="form-control" name="estoqueProduto" id="estoqueProduto" placeholder="Estoque">
                    <label for="nomeProduto">Preço do Produto</label>
                    <input type="text" class="form-control" name="precoProduto" id="precoProduto" placeholder="Preço">
                    <label for="categoriaProduto">Categoria do Produto</label>
                    <select class="custom-select" name="categoriaProduto" id="CategoriaDoProduto">
    @foreach($cats as $cat)
                        <option value="{{$cat->id}}">{{$cat->nome}}</option>
    @endforeach
                    </select>
                    <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                    <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
@endsection