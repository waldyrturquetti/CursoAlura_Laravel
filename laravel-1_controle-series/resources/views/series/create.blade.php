@extends('layout')

@section('cabecalho')
    Adicionar Série
@endsection

@section('conteudo')
<form class="post">
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome">
    </div>

    <button class="btn btn-primary">Adicionar</button>
</form>
@endsection



