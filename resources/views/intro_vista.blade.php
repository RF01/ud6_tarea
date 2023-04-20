@extends('plantilla');
@section('seccion')

    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-6">
                <h1>Bienvenido a nuestra tienda de bebidas</h1>
                <p>Ofrecemos una amplia variedad de bebidas alcohólicas y no alcohólicas para satisfacer tus necesidades.</p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/logoBebidas.png') }}" alt="Logo de la tienda de bebidas" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h2>Bebidas recomendadas</h2>
                <ul>
                    @foreach ($bebidasRecomendadas as $bebida)
                    <a href="#"> <li>{{ $bebida }}</li> </a>
                    @endforeach
                </ul>
            </div>
        </div>
    
    </div>
  

                       
                          


@endsection