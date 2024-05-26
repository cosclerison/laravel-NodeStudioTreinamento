@extends('site.layout')

@section('title', 'Home')

@section('content')

<div class="row container">

    <h3>Categoria</h3>

    @foreach($produtos as $produto)

        <div class="col s12 m4">
            <div class="card">
                <div class="card-image">
                    <img src="{{ $produto->image }}">
                    <a href="{{ route('site.details', $produto->slug) }}" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">visibility</i></a>
                </div>
                <div class="card-content">
                    <span class="card-title">{{ Str::limit($produto->name, 10, '...' )}}</span>
                    <p>
                        {{ Str::limit($produto->description, 40, '...') }}
                    </p>
                </div>
            </div>
        </div>
            
    @endforeach
</div>

<div class="row center">
    {{ $produtos->links() }}
</div>


@endsection
