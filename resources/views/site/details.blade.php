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

        <form action="{{ route('site.carrinho') }}" method="POST">
            {{-- 
                O que é CSRF (Cross-Site Request Forgery)?
                CSRF, também conhecido como ataque de falsificação de solicitações entre sites, explora a confiança que os aplicativos web depositam em seus usuários autenticados.
            --}}
            @csrf
            <input type="hidden" name="id" value="{{ $produto->id }}">
            <input type="hidden" name="name" value="{{ $produto->name }}">
            <input type="hidden" name="price" value="{{ $produto->price }}">
            <input type="hidden" name="image" value="{{ $produto->image }}">
            <input type="number" name="quantity" value="1">

            <button class="btn orange btn-large"> Comprar </button>

        </form>

    </div>

</div>

@endsection
