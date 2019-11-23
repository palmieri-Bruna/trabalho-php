@extends('layout')
@section('content')
    <br>
    <div class="row">
        <div class="col-lg-6 margin-tb">
            <div class="pull-right">
                <h2>Mostrar Produto</h2>
            </div>
        </div>
    </div>
    <br><br>
    <div class="row">
     <div class="col-lg-6 margin-tb">
        <div class="field">
            <strong>ID: </strong> {{$produto->id}}
        </div>
        <br>
        <div class="field">
            <strong>Descrição: </strong> {{$produto->descricao}}
        </div>
        <br>
        <div class="field">
            <strong>Quantidade: </strong> {{$produto->quantidade}}
        </div>
        <br>
        <div class="field">
            <strong>ID: </strong> {{$produto->valor}}
        </div>
        <br>
        <a class="btn btn-primary" href="{{ route('produtos.index') }}">Voltar</a
     </div>
    </div>
@endsection
