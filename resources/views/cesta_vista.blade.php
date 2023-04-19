@extends('plantilla');
@section('seccion')
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>Tipo Producto</th>
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
                      <td>{{$item->tipo_producto}}</td>
                      <td>{{$item->nombre}}</td>
                     
                      <td>{{$item->pvp}}</td>
                       <td>{{$item->cantidad}}</td>
                      <td><input type="hidden" name="id" value="{{$item->id}}" ></td>
                      
                      {{-- <td><input type="text" name="cantidad" ></td> --}}
                     <td> 
                       <select id="cantidad" name="cantidad" class="form-select" aria-label="Default select example" >
                        <option value="0">0</option>
                        <option value="1" selected="selectect">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>

                      </select>
                   
                     </td>
                   {{--    <td><button type="submit" name="accion" value="enviar" class="btn btn-primary">Enviar</button></td> --}}
                      <td><button type="submit"  class="btn btn-primary">Modificar Cantidad</button></td>
                  </tr> 

                </form>
                @endforeach
               
 
            </tbody> 
 
        </table>
      Suma Cesta:  {{$tablaCestaTotal}}
    </div>
    <div class=container>
       {{-- <form 
        {{-- action= "{{route('guardar_ruta')}}"  
        method="POST">
--}}
          @csrf {{--justo aqui--}}
       

         {{-- 
          <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
          </div>
        </form>  
        --}}
      </div>



    </div>


@endsection