@extends("layout")

@section('titulo')
    Cadastro de venda</b>
@stop

@section('conteudo')
    <form method="POST" action="/venda/inserir">
        @csrf
        <input type="text" name="nome">
        <input type="submit" value="Enviar">
    </form>
@stop
