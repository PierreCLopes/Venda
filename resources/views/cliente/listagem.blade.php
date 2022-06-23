@extends("layout")


@section('titulo')
    Listagem de Cliente
@stop

@section('conteudo')
    Listagem de Cliente
    <hr>
    @if(Session::has('message'))
        <p class="alert alert-info">{{ Session::get('message') }}</p>
    @endif

    <a class="btn btn-success btn-sm" href="{{ route("cliente.inserir") }}">Inserir</a>
    <table class="table">
        <tr>
            <td>Código</td>
            <td>Nome</td>
            <td>CNPJ/CPF</td>
            <td>Endereço</td>
            <td>Ações</td>
        </tr>
        @foreach ($cliente as $c)
            <tr>
                <td>{{$c->codigo}}</td>
                <td>{{$c->nome}}</td>
                <td>{{$c->cnpjcpf}}</td>
                <td>{{$c->endereco}}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="cliente_editar/{{$c->codigo}}">Editar</a>
                    <a class="btn btn-danger btn-sm" href="cliente_deletar/{{$c->codigo}}">Deletar</a>
                </td>
            </tr>
        @endforeach
    </table>
@stop