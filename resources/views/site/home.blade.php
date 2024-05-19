@extends('site.layout')

@section('title', 'Home')

@section('content')

{{-- Comentario que não e rederizado no navegador --}}
    <h1>Essa é a Home</h1>


    {{-- If Ternario --}}
    {{-- {{ isset($name) ? $name : 'vazio'}} --}}

    {{-- Definindo um valor padrão --}}
    {{-- {{ $teste ?? 'Valor Definido' }} --}}

    {{-- Estrutura de controle --}}

    {{-- if else --}}
    {{-- @if($name == 'Clerison')
        true
    @else
        false
    @endif --}}

    {{-- unless else OBS: faz a mesma função que o if porem de forma contraria --}}
    {{-- @unless($name == 'Clerison')
        true
    @else
        false
    @endunless --}}

    {{-- switch case default --}}
    {{-- @switch($age)
        @case(40)
            Idade correta é de {{$age}} anos.
            @break
        @case(42)
            Idade incorreta 
            @break
        @default
            Dados incorretos para ser verificado.
    @endswitch --}}

    {{-- isset --}}
    {{-- @isset($name)
        Nome existente é {{$name}}
    @endisset --}}

    {{-- empty --}}
    {{-- @empty($name)
        Sem nome declarado!
    @endempty --}}

    {{-- auth verifica se o usuário esta logado --}}
    {{-- @auth
        Usuário não está logado!!!
    @endauth --}}

    {{-- guest verifica se tem usuario sem login (convidado) --}}
    {{-- @guest
        Usuário visitante, sem acesso administrativo.
    @endguest --}}

@endsection