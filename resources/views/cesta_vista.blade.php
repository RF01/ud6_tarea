@extends('plantilla');
@section('seccion')


<div class=container>
  <br>
    <div>
        <table class="table table-success  table-hover">
            <thead>
                <tr>
                    {{-- <th>Tipo Producto</th> --}}
                    <th>Nombre</th>
                   
                    <th>Precio</th>
                    <th>Cantidad</th>
                    
                </tr>
            </thead>

            <tbody>

                @foreach ($tablaCesta as $item)
                <form 
                action= " {{route('cantidad_ruta')}} "
                 method="POST">
                 
                 @csrf  {{-- justo aqui --}} 

                  <tr>
                      {{-- <td>{{$item->tipo_producto}}</td> --}}
                      <td>{{$item->nombre}}</td>
                     
                      <td>{{$item->pvp}}</td>
                       <td>{{$item->cantidad}}</td>
                      <td><input type="hidden" name="id" value="{{$item->id}}" ></td>
                      
                      {{-- <td><input type="text" name="cantidad" ></td> --}}
                     <td> 
                        <select name="cantidad" id="cantidad" class="form-select" aria-label="Default select example">
                        @for ($i = 0; $i <= 10; $i++)
                          <option value="{{ $i }}" {{ $i == 1 ? 'selected' : '' }}>{{ $i }}</option>
                        @endfor
                    </select>
                   
                     </td>
                   {{--    <td><button type="submit" name="accion" value="enviar" class="btn btn-primary">Enviar</button></td> --}}
                      <td><button type="submit"  class="btn btn-danger">Modificar Cantidad (0 = eliminar)</button></td>
                  </tr> 

                </form>
                @endforeach
               
 
            </tbody> 
 
        </table>
      <h3>Suma Cesta:  {{$tablaCestaTotal}} €</h3>
    </div>
   



   

  </div>
@endsection