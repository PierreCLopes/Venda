@extends("layout")

@section('titulo')
    Detalhe do Produto <b>{{$produto->nome}}</b>
@stop

@section('conteudo')
    Detalhe do Produto <b>{{$produto->nome}}</b>
    <hr>
    Nome: {{$produto->nome}}<br>
    Descrição: {{$produto->descricao}}
@stop