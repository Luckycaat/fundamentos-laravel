@extends('app')
@section('titulo', 'Novo Cliente')
@section('conteudo')
    <h1>Novo Cliente</h1>
    <form action="">
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="email" class="form-control" id="name" placeholder="">
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="email" class="form-control" id="endereco" placeholder="">
        </div>
        <div class="mb-3">
            <label for="observacao" class="form-label">Example textarea</label>
            <textarea class="form-control" id="eobservacao" rows="3"></textarea>
        </div>observacao
    </form>

@endsection