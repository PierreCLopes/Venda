@extends("layout")


@section('titulo')
    Listagem de Produtos
@stop

@section('conteudo')
    Listagem de Produtos
    <hr>
    @if(Session::has('message'))
        <p class="alert alert-info">{{ Session::get('message') }}</p>
    @endif

    <a class="btn btn-success btn-sm" href="{{ route("produto.inserir") }}">Inserir</a>
    <table class="table">
        <tr>
            <td>Código</td>
            <td>Nome</td>
            <td>Valor</td>
            <td>Descrição</td>
            <td>Ações</td>
        </tr>
        @foreach ($produtos as $p)
            <tr>
                <td>{{$p->codigo}}</td>
                <td>{{$p->nome}}</td>
                <td>{{$p->valor}}</td>
                <td>{{$p->descricao}}</td>
                <td>
                    <a class="btn btn-primary btn-sm"  href="produto_editar/{{$p->codigo}}">Editar</a>
                    <a class="btn btn-danger btn-sm" href="produto_deletar/{{$p->codigo}}">Deletar</a>
                </td>
            </tr>
        @endforeach
    </table>
@stop