@extends('layouts.plantilla')

@section('title','compra')

@section('content')


       <p><strong>NOMBRE DEL SITIO TURISTICO SELECCIONADO : {{$lugar->lugar_turistico}} </strong></p>
       
       <form action="{{route('compra.store')}}" method="POST">
              @csrf
              <p><strong>FECHA:   </strong>
                            {{Form::select('id_travel', $viaje, null, ['id'=>'select-fecha'])}}     
              </p>
              <label>
                     FECHA SELECCIONADA:
                     <br>
                     <input type=text name="fecha"  id="date-select" value="">
              </label>
              <br>
              <label  >
                     HORARIO DISPONIBLE:
                     <br>
                     
                     <input type=text name="time" id="time-select" value="">
              </label>
              <br>
              <label >
                     PRECIO POR ESTE HORARIO:
                     <br>

                     <input type=text name="price" id="price-select"  value="">
              </label>
              <br>

              <label >
              ¿CUANTOS BOLETOS QUIERES COMPRAR? :
                     <br>

                     <input type=text name="cantidad" id="cant-select"  value="">
              </label>
              <br>
              <label >
                     ID_USUARIO :
                     <br>

                     <input type=text name="user"   value="{{auth()->user()->id}}">
              </label>
              <br>
              <label >
                     ID_LUGAR :
                     <br>

                     <input type=text name="id_lugar"   value="{{$lugar->id}}">
              </label>
              <br>

              <button href="{{route('compra.store')}}" type="submit">Finalizar compra</button>
       </form>
       <a  href="{{route('subdestinos.show',$lugar->id_departamento)}}">Regresar lugares turisticos</a>



<script type="text/javascript"  src="{{asset('/js/show.js')}}"></script>
</html>

@endsection
