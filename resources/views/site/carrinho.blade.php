@extends('site.layout')

@section('title', 'Carrinho')

@section('content')

<div class="row container">

  <h3>Meu Carrinho 
    {{ 
      $itens->count() != 0 
      ? 'tem ' . $itens->count() . ' produtos' 
      : 'está vazio!'
    }}
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
                  src="{{ $item->attributes->image }}" 
                  class="responsive-img circle" 
                  width="70" 
                  alt="image">
              </td>
              <td>{{ $item->name }}</td>
              <td>R$ {{ number_format($item->price, 2, ",", ".") }}</td>
              <td>
                <input 
                type="number"
                name="quantity"
                style="width: 40px; font-weight:900;"
                class="write center"
                value="{{ $item->quantity }}">
              </td>
              <td>
                <button class="btn-floating waves-effect waves-light orange">
                  <i class="material-icons">refresh</i>
                </button>
                <button class="btn-floating waves-effect waves-light red">
                  <i class="material-icons">delete</i>
                </button>

              </td>
            </tr>
          
          @endforeach

        </tbody>
      </table>

      <div class="row container center">
        <button class="btn waves-effect waves-light blue">
          Continuar comprando <i class="material-icons right">arrow-back</i>
        </button>
        <button class="btn waves-effect waves-light yellow">
          Limpar Carrinho
          <i class="material-icons right">clear</i>
        </button>
        <button class="btn waves-effect waves-light green">
          Finalizar pedido
          <i class="material-icons right">check</i>
        </button>
      </div>
            
</div>

@endsection
