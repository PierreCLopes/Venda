@extends("layout")

@section('titulo')
    Editar Produto
@stop

@section('conteudo')
    <h1 class="text-center">Editar Produto - #{{ $produto->codigo }}</h1>
    <a href="{{ route("produto.listagem") }}" class="btn btn-outline-warning">Voltar</a>
    <hr>

    <div class="row justify-content-center">
        <div class="col-10 col-sm-10 col-md-8 col-lg-6 mt-4">
            <form method="POST" action="{{ route("produto.update", $produto->codigo) }}">
                @csrf
                <div class="form-group">
                    <label for="codigo">Código:</label>
                    <input type="text" class="form-control" id="codigo" name="codigo" disabled value="{{ $produto->codigo }}">
                </div>
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{ $produto->nome }}" maxlength="200">
                </div>
                <br/>
                <div class="form-group">
                    <label for="description">Descrição da pendência:</label>
                    <textarea rows="5" cols="50" class="form-control" id="description" name="description" maxlength="3000">{{ $todo->description }}</textarea>
                </div>
                <br/>
                <div class="row">
                    <div class="col-sm-12 col-md-6 form-group">
                        <label for="status">Status da Pendência: </label>
                        <input type="text" class="form-control" id="status" name="status" value="{{ $todo->status }}" maxlength="40">
                    </div>
                    <div class="col-sm-12 col-md-6 form-group">
                        <label for="date_todo">Data Limite:</label>
                        <input type="date" class="form-control" id="date_todo" name="date_todo" value={{ $todo->date_todo }}>
                    </div>
                </div>
                <br/>
                <div class="form-group">
                    <label for="todo_groups_id">Grupo:</label>
                    <select class="form-select" name="todo_groups_id" id="todo_groups_id">
                        @foreach ($grupos as $g)
                            <option value="{{ $g->id }}" {{ $g->id == $todo->todo_groups_id ? "selected" : "" }}> {{ $g->name }} </option>
                        @endforeach
                    </select>
                </div>
                <br/>
                <button type="submit" class="btn btn-primary">Alterar</button>
            </form>
        </div>
    </div>

@stop