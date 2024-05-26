<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{-- @stack('style') --}}

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled ICON -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>

    <nav class="red">
        <div class="nav-wrapper container">
          <a href="/" class="brand-logo right">CursoLaravel</a>
          <ul id="nav-mobile" class="left">
            <li><a href="{{ route('site.index') }}">Home</a></li>
            <li>
              <a href="" class="dropdown-trigger" data-target="dropdown1">
                Categoria<i class="material-icons right">expand_more</i>
              </a></li>
            <li>
              <a href="{{ route('site.carrinho') }}">
                Carrinhos
                @if(Cart::getContent()->count() != 0)
                  <strong>
                    <span class="new bagde light-blue circle" data-badge-caption="">
                      ( {{ Cart::getContent()->count() }} )
                    </span>
                  </strong>
                @endif
              </a></li>
          </ul>
        </div>
    </nav>


    <!-- Dropdown Structure -->
    <ul id='dropdown1' class='dropdown-content'>
      @foreach($categoryMenu as $category)
        <li><a href="{{ route('site.category', $category->id) }}">{{ $category->name }}</a></li>
      @endforeach
      
    </ul>

    <!-- incorporando um conteudo -->
    @yield('content')

    {{-- @stack('script') --}}
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
      // Modo 001
      // document.addEventListener('DOMContentLoaded', function() {
      //     var elems = document.querySelectorAll('.dropdown-trigger');
          
      //     // Definindo a variável options
      //     var options = {
      //         // Adicione as opções desejadas aqui
      //         // Por exemplo: alignment: 'right', coverTrigger: false, etc.
      //         alignment: 'left',  // Exemplo de opção
      //         coverTrigger: false // Outro exemplo de opção
      //     };
          
      //     var instances = M.Dropdown.init(elems, options);
      // });

      // Modo 02 (Disponibilizado por outro estudante)
      var elemDrop = document.querySelectorAll('.dropdown-trigger');
      var instanceDrop = M.Dropdown.init(elemDrop, {
                coverTrigger:false,
                constrainWidth:false 
      });

    </script>
    
</body>
</html>