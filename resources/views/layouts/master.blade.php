<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Blog Template for Bootstrap</title>

     

    {{--  Jquery import  --}}
    <script
    src="https://code.jquery.com/jquery-3.2.1.js"
    integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
    crossorigin="anonymous"></script>

    {{--  JS File Import  --}}
    <script type="text/javascript" src="{!! asset('js/jquery.js') !!}"></script>

      <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="../../public/css/blog.css" rel="stylesheet"> 

  </head>

  <body>

    @include('layouts.nav')

    @if($flash = session('message'))

      <div id="flash-message" class="alert alert-success" role="alert">

        {{ $flash }}
      
      </div>

    @endif

    <div class="blog-header">

      <div class="container">

        <h1 class="container">The Bootstrap Blog</h1>

        <p class="lead blog-description">An example blog template built with Bootstrap.</p>
      
      </div>

    </div>

    <div class="container">

      <div class="row">

        @yield('content')

        @include('layouts.sidebar')
      
      </div>

    </div>

    @include('layouts.footer')
    
  </body>
  
</html>
