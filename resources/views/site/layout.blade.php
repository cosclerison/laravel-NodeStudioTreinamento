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
          <a href="#" class="brand-logo center">CursoLaravel</a>
          <ul id="nav-mobile" class="left">
            <li><a href="sass.html">Home</a></li>
            <li><a href="badges.html">Carrinho</a></li>
          </ul>
        </div>
    </nav>

    <!-- incorporando um conteudo -->
    @yield('content')

    {{-- @stack('script') --}}
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
</body>
</html>