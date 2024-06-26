@extends('site.layout')

@section('title', 'Carrinho')

@section('content')

<div class="row container">

  @if($message = Session::get('sucesso'))
    <div class="card green darken-1">
      <div class="card-content white-text">
        <span class="card-title">parabéns!</span>
        <p>
          {{ $message }}
        </p>
      </div>
    </div>
  @endif

  @if($message = Session::get('aviso'))
    <div class="card blue darken-1">
      <div class="card-content white-text">
        <span class="card-title">Carrinho vazio!</span>
        <p>
          {{ $message }}
        </p>
      </div>
    </div>
  @endif

  @if($itens->count() == 0)

    <div class="card orange darken-1">
      <div class="card-content white-text">
        <span class="card-title">Carrinho vazio!</span>
        <p>
          Aproveite nossas promoções!!!
        </p>
      </div>
    </div>

  @else

  <h3>Meu Carrinho 
    {{ $itens->count() != 0 ? 'tem ' . $itens->count() . ' produtos' : 'está vazio!' }}
  </h3>
    
    <table class="striped">
      <thead>
        <tr>
            <th></th>
            <th>Name</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th></th>
        </tr>
      </thead>
      <tbody>

        @foreach($itens as $item)

          <tr>
            <td>
              <img 
                src="{{ url("storage/{$item->attributes->image}") }}" 
                class="responsive-img circle" 
                width="70" 
                alt="image">
            </td>
            <td>{{ $item->name }}</td>
            <td>R$ {{ number_format($item->price, 2, ",", ".") }}</td>
            
            {{-- Button Update --}}
            <form action="{{ route('site.atualizacarrinho') }}" method="post" enctype="multipart/form-data">
              @csrf
              <td>
                <input 
                type="number"
                name="quantity"
                style="width: 40px; font-weight:900;"
                class="write center"
                min="1"
                value="{{ $item->quantity }}">
              </td>
              <td>
                <button class="btn-floating waves-effect waves-light orange">
                  <input type="hidden" name="id" value="{{ $item->id }}">
                  <i class="material-icons">refresh</i>
                </button>
            </form>

              {{-- Button Update --}}
              <form action="{{ route('site.deletecarrinho') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $item->id }}">
                <button class="btn-floating waves-effect waves-light red">
                  <i class="material-icons">delete</i>
                </button>
              </form>

            </td>
          </tr>
        
        @endforeach

      </tbody>
    </table>

    <div class="card orange darken-1">
      <div class="card-content white-text">
        <span class="card-title">R$ {{ number_format(Cart::getTotal(), 2, ",", ".") }}</span>
        <p>Pague em até 12x sem juros!!!</p>
      </div>
    </div>
    
  @endif

    <div class="row container center">
      <a href="{{ route('site.index') }}" class="btn waves-effect waves-light blue">
        Continuar comprando<i class="material-icons right">arrow_back</i>
      </a>
      <a href="{{ route('site.limpacarrinho') }}" class="btn waves-effect waves-light dark-blue" {{ $itens->count() == 0 ? 'disabled' : '' }}>
        Limpar Carrinho
        <i class="material-icons right">clear</i>
      </a>
      <button class="btn waves-effect waves-light green" {{ $itens->count() == 0 ? 'disabled' : '' }}>
        Finalizar pedido
        <i class="material-icons right">check</i>
      </button>
    </div>
            
</div>

@endsection
