@extends("layout")

@section('titulo')
    Editar venda
@stop

@section('conteudo')
    <h1 class="text-center">Editar venda - #{{ $venda->codigo }}</h1>
    
    <hr>        'codigo',
        'cliente',
        'venda',
        'quantidade',
        'valorunitario',
        'valortotal',
        'descricao'



    <div class="row justify-content-center">
        <div class="col-10 col-sm-10 col-md-8 col-lg-6 mt-4">
            <form method="POST" action="{{ route("venda.update", $venda->codigo) }}">
                @csrf
                <div class="form-group">
                    <label for="codigo">Código:</label>
                    <input type="text" class="form-control" id="codigo" name="codigo" disabled value="{{ $venda->codigo }}">
                </div>

                <div class="form-group">
                    <label for="nome">Cliente:</label>
                    <input type="text" class="form-control" id="cliente" name="cliente" value="{{ $venda->cliente }}" maxlength="200">
                </div>

                <div class="form-group">
                    <label for="valor">Quantidade:</label>
                    <input type="number" min="1" step="any" class="form-control" id="quantidade" name="quantidade" value="{{ $venda->quantidade }}">
                </div>

                <div class="form-group">
                    <label for="valor">Valor unitário:</label>
                    <input type="number" min="1" step="any" class="form-control" id="valorunitario" name="valorunitario" value="{{ $venda->valorunitario }}">
                </div>

                <div class="form-group">
                    <label for="valor">Valor total:</label>
                    <input type="number" min="1" step="any" class="form-control" id="valortotal" name="valortotal" value="{{ $venda->valortotal }}">
                </div>

                <div class="form-group">
                    <label for="valor">Quantidade:</label>
                    <input type="number" min="1" step="any" class="form-control" id="quantidade" name="quantidade" value="{{ $venda->quantidade }}">
                </div>
                
                <br/>
                <div class="form-group">
                    <label for="descricao">Descrição:</label>
                    <textarea rows="5" cols="50" class="form-control" id="descricao" name="descricao" maxlength="3000">{{ $venda->descricao }}</textarea>
                </div>
                <br/>
                <button type="submit" class="btn btn-primary">Alterar</button>
            </form>
        </div>
    </div>

@stop