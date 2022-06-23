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
    
    <a href="{{ route("produto.inserir") }}">Inserir</a>
    <table class="table table-striped">
        <tr>
            <td>Código</td>
            <td>Nome</td>
            <td>Valor</td>
            <td>Descrição</td>
            <td>Ações</td>
        </tr>
        @foreach ($produtos as $p)
            <tr>
                <td><a href="produto/{{$p->codigo}}">{{$p->codigo}}</a></td>
                <td>{{$p->nome}}</td>
                <td>{{$p->valor}}</td>
                <td>{{$p->descricao}}</td>
                <td>
                    <a href="produto_editar/{{$p->codigo}}">Editar</a>
                    <a href="produto_deletar/{{$p->codigo}}">Deletar</a>
                </td>
            </tr>
        @endforeach
    </table>
@stop