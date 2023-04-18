@extends('plantilla');
@section('seccion')
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>Tipo Producto</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($tablaProductos as $item)
                <form 
                action= " {{route('producto_ruta')}} "
                 method="POST">
                 
                 @csrf  {{-- justo aqui --}} 

                  <tr>
                      <td>{{$item->tipo_producto}}</td>
                      <td>{{$item->nombre}}</td>
                      <td>{{$item->descripcion}}</td>
                      <td>{{$item->pvp}}</td>
                      <td><input type="hidden" name="id" value="{{$item->id}}" ></td>
                       {{--
                      <td><input type="text" name="pvp" ></td>
                      <td><button type="submit" name="accion" value="enviar" class="btn btn-primary">Enviar</button></td> --}}
                      <td><button type="submit"  class="btn btn-primary">Enviar Carrito</button></td>
                  </tr> 

                </form>
                @endforeach
               
 
            </tbody> 
 
        </table>
       {{-- contador de registros:  {{$total}} --}}
    </div>
    <div class=container>
       <form 
        action= "{{route('guardar_ruta')}}" 
        method="POST">

          @csrf {{--justo aqui--}}
          <div class="form-group row">
            <label for="tipoProducto" class="col-sm-2 col-form-label">Tipo Producto</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="tipo_producto" name="tipo_producto" placeholder="Tipo de producto">
            </div>
          </div>
         <div class="form-group row">
            <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del producto">
            </div>
          </div>

          <div class="form-group row">
            <label for="descripcion" class="col-sm-2 col-form-label">Descripción</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción del producto">
            </div>
          </div>
          <div class="form-group row">
            <label for="pvp" class="col-sm-2 col-form-label">PVP</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="pvp" name="pvp" placeholder="Precio del producto">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
          </div>
        </form> 
      </div>



    </div>


@endsection