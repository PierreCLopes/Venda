@extends("layout")

@section('titulo')
    Editar Cliente
@stop

@section('conteudo')
    <h1 class="text-center">Cadastro de Cliente</h1>
    
    <hr>

    <div class="row justify-content-center">
        <div class="col-10 col-sm-10 col-md-8 col-lg-6 mt-4">
            <form method="POST" action="{{ route("cliente.create")}}">
                @csrf
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" maxlength="200">
                </div>
                
                <div class="form-group">
                    <label for="nome">CNPJ/CPF:</label>
                    <input type="text" class="form-control" id="cnpjcpf" name="cnpjcpf" maxlength="30">
                </div>
                
                <div class="form-group">
                    <label for="nome">Endereço</label>
                    <input type="text" class="form-control" id="endereco" name="endereco" maxlength="200">
                </div>
                
                <br/>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </div>

@stop