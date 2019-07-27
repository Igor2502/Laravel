@extends('layout.app', ["current" => "produtos"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="/produtos/{{$pro->id}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomePRoduto">Nome do Produto</label>
                    <input type="text" class="form-control" name="nomeProduto" value="{{$pro->nome}}" id="nomeProduto">
                    <label for="estoquePRoduto">Estoque</label>
                    <input type="text" class="form-control" name="estoqueProduto" value="{{$pro->estoque}}" id="estoqueProduto">
                    <label for="precoPRoduto">Preço do Produto</label>
                    <input type="text" class="form-control" name="precoProduto" value="{{$pro->preco}}" id="precoProduto">
                    <label for="categoriaPRoduto">Categoria do Produto</label>
                    <input type="text" class="form-control" name="categoriaProduto" value="{{$pro->categoria_id}}" id="categoriaProduto">
                    <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                    <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
@endsection