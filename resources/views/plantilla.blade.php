<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>

        <!-- Fonts -->
        <!-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> -->
       
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      
        <!-- Styles -->
        
    </head>
    <body>
        {{-- <h1>Plantilla </h1> --}}
        {{-- <p>HOLA</p> --}}
        <div class="container">
            
            {{-- <a href="{{route('intro_ruta')}}" class="btn btn-primary"> Intro</a>
            <a href="{{route('alumno_ruta')}}" class="btn btn-primary"> Alumno</a>
            <a href="{{route('profesor_ruta')}}" class="btn btn-primary" > Profesor</a>
            <a href="{{route('publi_ruta')}}" class="btn btn-primary" > Publicadas</a>
             --}}
             <a href="{{route('intro_ruta')}}" class="btn btn-primary"> Intro</a> 
            <a href="{{route('producto_ruta')}}" class="btn btn-primary">Producto</a>
            <a href="{{route('cesta_ruta')}}" class="btn btn-primary">Cesta</a>
        </div>

        <div class="container">
            
            
            @yield('seccion') <!--  Aquí ira el código difente-->

        </div>
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS  -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </body>
</html>