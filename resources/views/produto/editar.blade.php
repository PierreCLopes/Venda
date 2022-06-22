@extends("layout")

@section('titulo')
    Editar Produto
@stop

@section('conteudo')
    <h1 class="text-center">Editar Produto - #{{ $produto->codigo }}</h1>
    
    <hr>

    <div class="row justify-content-center">
        <div class="col-10 col-sm-10 col-md-8 col-lg-6 mt-4">
            <form method="POST" action="{{ route("produto.update", $produto->codigo) }}">
                @csrf
                <div class="form-group">
                    <label for="codigo">Código:</label>
                    <input type="text" class="form-control" id="codigo" name="codigo" disabled value="{{ $produto->codigo }}">
                </div>
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{ $produto->nome }}" maxlength="200">
                </div>
                <div class="form-group">
                    <label for="valor">Valor:</label>
                    <input type="number" min="1" step="any" class="form-control" id="valor" name="valor" value="{{ $produto->valor }}">
                </div>
                <br/>
                <div class="form-group">
                    <label for="descricao">Descrição:</label>
                    <textarea rows="5" cols="50" class="form-control" id="descricao" name="descricao" maxlength="3000">{{ $produto->descricao }}</textarea>
                </div>
                <br/>
                <button type="submit" class="btn btn-primary">Alterar</button>
            </form>
        </div>
    </div>

@stop