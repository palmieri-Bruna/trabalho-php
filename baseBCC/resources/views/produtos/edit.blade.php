@extends('layout')
@section('content')
    <br>
    <div class="row">
        <div class="col-lg-6 margin-tb">
            <div class="pull-right">
                <h2>Editar Produto</h2>
            </div>
        </div>
    </div>
    <br><br>
    <form action="{{ route('produtos.update',$produto->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="field">
            <strong>ID: </strong> {{$produto->id}}
        </div>

        <div class="field">
            <strong>Descrição: </strong>
            <div class="control">
                <input type="text" class="input" name="descricao"
                 value="{{$produto->descricao}}">
            </div>
        </div>
        <div class="field">
            <strong>Quantidade: </strong>
            <div class="control">
                <input type="text" class="input" name="quantidade"
                value="{{$produto->quantidade}}">
            </div>
        </div>
        <div class="field">
            <strong>Valor: </strong>
            <div class="control">
                <input type="text" class="input" name="valor"
                value="{{$produto->valor}}">
            </div>
        </div>
        <input type="submit" class="button is-success" value="Gravar">
        <input type="reset" class="button is-warning" value="Limpar">
    </form>

    <br><br>
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Opa!!!</strong> Existem erros na entrada de dados.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

@endsection
