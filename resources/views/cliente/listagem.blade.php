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

    <table class="table">
        <tr>
            <td>Código</td>
            <td>Nome</td>
            <td>CNPJ</td>
            <td>Endereço</td>
            <td>Ações</td>
        </tr>
        @foreach ($cliente as $p)
            <tr>
                <td><a href="cliente/{{$p->codigo}}">{{$p->codigo}}</a></td>
                <td>{{$p->nome}}</td>
                <td>{{$p->valor}}</td>
                <td>{{$p->descricao}}</td>
                <td>
                    <a href="cliente_editar/{{$p->codigo}}">Editar</a>
                    <a href="cliente_deletar/{{$p->codigo}}">Deletar</a>
                </td>
            </tr>
        @endforeach
    </table>
@stop