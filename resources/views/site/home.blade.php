@extends('site.layout')

@section('title', 'Home')

@section('content')

{{-- Comentario que não e rederizado no navegador --}}
    <h1>Essa é a Home</h1>


    {{-- If Ternario --}}
    {{-- {{ isset($name) ? $name : 'vazio'}} --}}

    {{-- Definindo um valor padrão --}}
    {{-- {{ $teste ?? 'Valor Definido' }} --}}
    
                                            {{-- ### Estrutura de controle ### --}}

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

                                            {{-- ### Estrutura de repetição ### --}}
    {{-- for --}}
    {{-- @for($i = 0; $i <= 10; $i++)
        valor atual com "for" é {{ $i }} <br>
        @endfor --}}
        
        
    {{-- while --}}
    {{-- @php
        $i = 0
    @endphp

    @while ($i <= 5)
        Valor atual com "while" é {{ $i }} <br>
        @php
            $i++
        @endphp
    @endwhile --}}
    
    {{-- foreach --}}
    {{-- @foreach ($frutas as $fruta)
        Fruta: {{$fruta}} <br>
    @endforeach --}}

    {{-- forelse --}}
    {{-- @forelse ($frutas as $fruta)
        Fruta: {{$fruta}} <br>
    @empty
        Fruta: "Sem Registro"
    @endforelse --}}

                                            {{-- ### Include ### --}}

    {{-- include, nesta comunicação estamos enviando o valor de titulo para a view message.blade.php
    e apresentando em tela o seu retorno onde é inserido abaixo --}}
    {{-- @include('includes.message', ['titulo' => 'Mensagem de sucesso!']) --}}


                                            {{-- ### Component ### --}}

    {{-- Component --}}
    @component('components.sidebar')
        @slot('paragraph')
            Texto declarado dentro de slot na view home.blade.php
        @endslot
    @endcomponent

@endsection

@push('style')
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
@endpush

@push('script')
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
@endpush