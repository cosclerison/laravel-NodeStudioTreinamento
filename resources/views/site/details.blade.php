@extends('site.layout')

@section('title', 'Detalhes')

@section('content')

<div class="row container">
    </br>

    <div class="col s12 m6">
        <img src="{{ $produto->image }}" alt="Imagem" class="responsive-img"> 
    </div>

    <div class="col s12 m6">
        <h4> {{ $produto->name }} </h4>
        <h4> R${{ number_format($produto->price, 2, ",", ".") }} </h4>
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
