@extends("layout")

@section('titulo')
    Editar Produto
@stop

@section('conteudo')
    <h1 class="text-center">Cadastrar Produto</h1>
    
    <hr>

    <div class="row justify-content-center">
        <div class="col-10 col-sm-10 col-md-8 col-lg-6 mt-4">
            <form method="POST" action="{{ route("produto.create") }}">
                @csrf
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" maxlength="200">
                </div>
                <div class="form-group">
                    <label for="valor">Valor:</label>
                    <input type="number" min="1" step="any" class="form-control" id="valor" name="valor">
                </div>
                <br/>
                <div class="form-group">
                    <label for="descricao">Descrição:</label>
                    <textarea rows="5" cols="50" class="form-control" id="descricao" name="descricao" maxlength="3000"></textarea>
                </div>
                <br/>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </div>

@stop