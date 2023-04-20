@extends('plantilla');
@section('seccion')

<div class=container>
    <br>
     <h2>Buscar por letras en el nombre</h2>

    <form method="GET" action="{{ route('buscar_ruta') }}">
        <label for="nombre">Buscar producto:</label>
        <input type="text" id="nombre" name="nombre" required>
        <button type="submit" class="btn btn-info">Buscar</button>
    </form>
    @csrf {{--justo aqui--}}

    @if (isset($productos))
        @if (count($productos) > 0)

            <h4>Resultados de la búsqueda</h4>
            <table class="table table-hover">
                <thead>
                    <tr>
                     
                        <th> Producto </th>
                        <th>Precio €</th>
                    </tr>
                </thead>
            
                <tbody>
            
                @foreach ($productos as $producto)
                <tr>

                    <td>{{ $producto->nombre }} </td>
                    <td>{{ $producto->pvp }} </td>
                </tr>
                @endforeach
            
        </tbody> 
 
        </table>
        @else
            <p>No se encontraron resultados para la búsqueda "{{ $nombre }}"</p>
        @endif
    @else
        <p>Ingrese el nombre del producto que desea buscar</p>
    @endif


</div> 
@endsection