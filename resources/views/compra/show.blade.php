@extends('layouts.plantilla')

@section('title','compra')

@section('content')

       <p><strong>NOMBRE DEL SITIO TURISTICO SELECCIONADO : {{$lugar->lugar_turistico}} </strong></p>
       
       <form action="">
              <p><strong>FECHA:   </strong>
                            {{Form::select('combo', $viaje, null, ['id'=>'select-fecha'])}}     
              </p>
              <label >
                     PRECIO POR LUGAR TURISTICO:
                     <br>

                     <input type=text name="price" id="price-select"  value="">
              </label>
              <br>
              <label  >
                     HORARIO DISPONIBLE:
                     <br>
                     
                     <input type=text name="time" id="time-select" value="">
              </label>
              <br>
              <label>
                     ELIGE LA CANTIDAD:
                     <br>
                     <input type=text  value="">
              </label>
              <br>
              <button type="submit">Finalizar compra</button>
       </form>




<script type="text/javascript"  src="{{asset('/js/show.js')}}"></script>
</html>

@endsection
