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

    <a href="{{ route("venda.inserir") }}">Inserir</a>    
    <table class="table table-striped">
        <tr>
            <td>Código</td>
            <td>Cliente</td>
            <td>Produto</td>
            <td>Quantidade</td>
            <td>Valor total</td>
            <td>Valor unitário</td>
            <td>Descrição</td>
            <td>Ações</td>
        </tr>
        @foreach ($venda as $p)         
                <td><a href="venda/{{$p->codigo}}">{{$p->codigo}}</a></td>             
                <td>{{$p->cliente}}</td>
                <td>{{$p->produto}}</td>
                <td>{{$p->quantidade}}</td>
                <td>{{$p->valortotal}}</td>
                <td>{{$p->valorunitario}}</td>
                <td>{{$p->descricao}}</td>
                <td>
                    <a href="venda_editar/{{$p->codigo}}">Editar</a>
                    <a href="venda_deletar/{{$p->codigo}}">Deletar</a>
                </td>
            </tr>
        @endforeach
    </table>
@stop