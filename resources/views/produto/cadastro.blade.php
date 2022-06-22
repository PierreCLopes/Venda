@extends("layout")

@section('titulo')
    Cadastro de Produto</b>
@stop

@section('conteudo')
    <form method="POST" action="/produto/inserir">
        @csrf
        <input type="text" name="nome">
        <input type="submit" value="Enviar">
    </form>
@stop
