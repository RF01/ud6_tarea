@extends('plantilla');
@section('seccion')
    <div class="container">
        <section>
          <h1>Listado de productos</h1>
          <table class="table table-striped">
              <thead>
                  <tr>
                      {{-- <th>Tipo Producto</th> --}}
                      <th>Nombre</th>
                      <th>Descripción</th>
                      <th>Precio €</th>
                  </tr>
              </thead>

              <tbody>

                  @foreach ($tablaProductos as $item)
                  <form action= " {{route('guardar_cesta_ruta')}} "  method="POST">
                  
                  @csrf  {{-- justo aqui --}} 

                    <tr>
                        {{-- <td>{{$item->tipo_producto}}</td> --}}
                        <td>{{$item->nombre}}</td>
                        <td>{{$item->descripcion}}</td>
                        <td>{{$item->pvp}}</td>
                        <td><input type="hidden" name="id_producto" value="{{$item->id}}" ></td>
                        <td><input type="hidden" name="tipo_producto" value="{{$item->tipo_producto}}" ></td>
                        <td><input type="hidden" name="nombre" value="{{$item->nombre}}" ></td>
                    
                        <td><input type="hidden" name="pvp" value="{{$item->pvp}}" ></td>
                        <td><input type="hidden" name="cantidad" value="1" ></td>
                    
                        <td><button type="submit"  class="btn btn-success">Enviar Carrito</button></td>
                    </tr> 

                  </form>
                  @endforeach
                
  
              </tbody> 
  
          </table>
        
        <div class="col-sm-6 mb-3" >
          <h6>Contador de registros:  {{$tablaProductosTotal}}</h6>
        </div> 
        
        <hr> 
      </section>
      <section>
        <h2>Formulario inserción de productos </h2>
 
        <form action= "{{route('guardar_ruta')}}"  method="POST">

            @csrf {{--justo aqui--}}
            <div class="form-group row">
              <label for="tipoProducto" class="col-sm-2 col-form-label">Tipo Producto</label>
              <div class="col-sm-10">
                <select  id="tipo_producto" name="tipo_producto" class="form-select" aria-label="Default select example">
               
                  <option value="1">Infusiones</option>
                  <option value="2">Refrescos</option>
                  <option value="3">Con Alcohol</option>
                </select>
               
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
                <button type="submit" class="btn btn-warning">Insertar Producto</button>
              </div>
            </div>
          </form> 

        </section>

    </div>


@endsection