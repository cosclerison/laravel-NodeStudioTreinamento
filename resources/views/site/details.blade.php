@extends('site.layout')

@section('title', 'Detalhes')

@section('content')

<div class="row container">

    <div class="col s12 m6">
        <img src="{{ $produto->image }}" alt="Imagem" class="responsive-img"> 
    </div>

    <div class="col s12 m6">
        <h1> {{ $produto->name }} </h1>
        <p> {{ $produto->description }} </p>
        <p> 
            Postado por: {{ $produto->user->first_name }}
        </br>
            Categoria: {{ $produto->category->name }}
        </p>
        <button class="btn orange btn-large" disabled="disabled"> Comprar </button>
    </div>

</div>

@endsection
