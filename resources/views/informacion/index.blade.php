
<!doctype html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>PROGRAMAS SANTOS S.A</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/cover/">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h1 class="masthead-brand">BIENVENIDO A PROGRAMAS SANTOS</h1>
    </div>
  </header>

  <main role="main" class="inner cover">
    <h5 class="text-danger" class="cover-heading">USTED SE ENCUENTRA DENTRO DE LA PAGINA DE HOME</h5>
    <img class="rounded" src="{{ asset('fondos/fondo2.png')}}" class="img-fluid" alt="Responsive image">
    <p class="lead"><h3>SELECCIONE EL AREA EN LA QUE DESEA INGRESAR</h3></p>
      <!-- Example single danger button -->
<div class="btn-group">
  <button type="button" class=" btn btn dropdown-toggle text-white bg-dark" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    FORMULARIOS:
  </button>
<div class="dropdown-menu">
    <a class="dropdown-item bg-dark text-white" href="{{ route('day.index')}}">PAGO POR DIA</a>
    <a class="dropdown-item bg-dark text-white" href="{{ route('fraction.index')}}">PAGO POR FRACCI??N</a>
    <a class="dropdown-item bg-dark text-white" href="{{ route('corte.index')}}">REPORTE DE CORTES</a>
</div>
</div>
<div class="btn-group">
  <button type="button" class=" btn btn dropdown-toggle text-white bg-dark" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    M??S INFORMACI??N:
  </button>
<div class="dropdown-menu">
    <a class="dropdown-item bg-dark text-white" href="{{ route('informacion.acercaDe')}}">ACERCA DE:</a>
    <a class="dropdown-item bg-dark text-white" href="{{ route('informacion.contacto')}}">CONTACTO</a>
    <a class="dropdown-item bg-dark text-white" href="{{ route('informacion.politicas')}}">POLITICAS</a>
    <a class="dropdown-item bg-dark text-white" href="{{ route('informacion.privacidad')}}">PRIVACIDAD</a>
</div>
</div>
</main>
      
  <footer class="mastfoot mt-auto">
    <div class="inner">
      <p>Para mas informacion, enviar un mensaje al siguiente correo: <br> oscrsnts29@gmail.com</p>
    </div>
  </footer>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>