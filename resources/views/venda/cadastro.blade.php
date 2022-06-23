@extends("layout")

@section('titulo')
    Editar venda
@stop

@section('conteudo')
    <h1 class="text-center">Cadastrar Venda</h1>
    
    <hr>        
    <div class="row justify-content-center">
        <div class="col-10 col-sm-10 col-md-8 col-lg-6 mt-4">
            <form method="POST" action="{{ route("venda.create") }}">
                @csrf
                <div class="form-group">
                    <label for="cliente">Cliente:</label>
                    <select class="form-control" name="cliente" id="cliente">
                        @foreach(App\Models\Cliente::All() as $row)
                            <option value="{{$row->codigo}}">{{$row->nome}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="produto">Produto:</label>
                    <select class="form-control" name="produto" id="produto">
                        @foreach(App\Models\Produto::All() as $row)
                            <option value="{{$row->codigo}}">{{$row->nome}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="valorunitario">Valor unitário:</label>
                    <input type="number" min="1" step="any" class="form-control" id="valorunitario" name="valorunitario">
                </div>

                <div class="form-group">
                    <label for="quantidade">Quantidade:</label>
                    <input type="number" min="1" step="any" class="form-control" id="quantidade" name="quantidade">
                </div>

                <div class="form-group">
                    <label for="valortotal">Valor total:</label>
                    <input type="number" min="1" step="any" class="form-control" id="valortotal" name="valortotal" disabled>
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