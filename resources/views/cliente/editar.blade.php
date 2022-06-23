@extends("layout")

@section('titulo')
    Editar Cliente
@stop

@section('conteudo')
    <h1 class="text-center">Editar Cliente - #{{ $cliente->codigo }}</h1>
    
    <hr>

    <div class="row justify-content-center">
        <div class="col-10 col-sm-10 col-md-8 col-lg-6 mt-4">
            <form method="POST" action="{{ route("cliente.update", $cliente->codigo) }}">
                @csrf
                <div class="form-group">
                    <label for="codigo">Código:</label>
                    <input type="text" class="form-control" id="codigo" name="codigo" disabled value="{{ $cliente->codigo }}">
                </div>
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{ $cliente->nome }}" maxlength="200">
                </div>
                
                <div class="form-group">
                    <label for="nome">CNPJ:</label>
                    <input type="text" class="form-control" id="cnpjcpf" name="cnpjcpf" value="{{ $cliente->cnpjcpf }}" maxlength="30">
                </div>
                
                <div class="form-group">
                    <label for="nome">Endereço</label>
                    <input type="text" class="form-control" id="endereco" name="endereco" value="{{ $cliente->endereco }}" maxlength="200">
                </div>
                
                <br/>
                <button type="submit" class="btn btn-primary">Alterar</button>
            </form>
        </div>
    </div>

@stop