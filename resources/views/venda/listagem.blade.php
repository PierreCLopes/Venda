@extends("layout")


@section('titulo')
    Listagem de Vendas
@stop

@section('conteudo')
    Listagem de Vendas
    <hr>
    @if(Session::has('message'))
        <p class="alert alert-info">{{ Session::get('message') }}</p>
    @endif

    <a class="btn btn-success btn-sm" href="{{ route("venda.inserir") }}">Inserir</a>
    <table class="table">
        <tr>
            <td>Código</td>
            <td>Cliente</td>
            <td>Produto</td>
            <td>Quantidade</td>
            <td>Valor unitário</td>
            <td>Valor total</td>
            <td>Descrição</td>
            <td>Ações</td>
        </tr>
        @foreach ($venda as $v)
            <tr>
                <td>{{$v->codigo}}</td>                
                <td>{{$v->cliente()->first()->nome}}</td>
                <td>{{$v->produto()->first()->nome}}</td>
                <td>{{$v->quantidade}}</td>
                <td>{{$v->valorunitario}}</td>
                <td>{{$v->valortotal}}</td>
                <td>{{$v->descricao}}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="venda_editar/{{$v->codigo}}">Editar</a>
                    <a class="btn btn-danger btn-sm" href="venda_deletar/{{$v->codigo}}">Deletar</a>
                </td>
            </tr>
        @endforeach
    </table>
@stop