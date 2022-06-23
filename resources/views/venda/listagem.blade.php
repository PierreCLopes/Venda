@extends("layout")


@section('titulo')
    Listagem de venda
@stop

@section('conteudo')
    Listagem de vendas
    <hr>
    @if(Session::has('message'))
        <p class="alert alert-info">{{ Session::get('message') }}</p>
    @endif

    <table class="table">
        <tr>
            <td>Código</td>
            <td>Nome</td>
            <td>Valor</td>
            <td>Descrição</td>
            <td>Ações</td>
        </tr>
        @foreach ($venda as $p)
            <tr>
                <td><a href="venda/{{$p->codigo}}">{{$p->codigo}}</a></td>
                <td>{{$p->nome}}</td>
                <td>{{$p->valor}}</td>
                <td>{{$p->descricao}}</td>
                <td>
                    <a href="venda_editar/{{$p->codigo}}">Editar</a>
                    <a href="venda_deletar/{{$p->codigo}}">Deletar</a>
                </td>
            </tr>
        @endforeach
    </table>
@stop