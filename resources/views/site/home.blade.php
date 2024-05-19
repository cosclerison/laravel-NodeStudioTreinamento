@extends('site.layout')

@section('title', 'Home')

@section('content')

{{-- Comentario que não e rederizado no navegador --}}
    <h1>Essa é a Home</h1>

    {{-- {{ isset($name) ? $name : 'vazio'}} --}}

    {{ $teste ?? 'Valor Definido' }}

@endsection