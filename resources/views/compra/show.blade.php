@extends('layouts.plantilla')

@section('title','compra')

@section('content')

       <div class="contenedor-genera">
       
              <section class="contenedor-imagen">
                     <img src="{{asset('storage/img/'.$lugar->imagen)}}" alt="">
              </section>





              <section class="contenedor-formulario">
                     <h1>Descripcion del Vuelo: </h1>
                     
                     <form action="{{route('compra.store')}}" method="POST">
                            @csrf

                            <section class="tipo-de-viaje">
                            <h2>Seleccione los Detalles:</h2>
                            <div class="caja-viaje">
                                   <h2>DETALLES:</h2>
                               
                                   <p class="viajelbl"> FECHA:</p> 
                                   <p class="viajerbr">{{Form::select('id_travel', $viaje, null, ['id'=>'select-fecha'])}} </p> 


                                   <label>
                                          <p class="horariolbl">
                                          HORARIO DISPONIBLE:   </p>                               
                                          <input type=text name="time" id="time-select" value="">
                                          
                                   </label>
                                   
                                   <br>

                                   <label >
                                    <p class="cantilbl">
                                    CANTIDAD DE BOLETOS :
                                    </p>
                                   <input type=text name="cantidad" id="cant-select"  value="">

                                   </label>
                                   <br>

                                 
                            </div>
                            <button href="{{route('compra.store',auth()->user()->id)}}" type="submit">Finalizar compra</button>

                            </section>

                            <section class="recivo">
                            <h2>Recivo:</h2>
                            <div class="caja-recibo">
                                   <h2>Informacion</h2>

                                   <p class="nomblbl">NOMBRE DEL SITIO TURISTICO: </p><p class="nombrbr">{{$lugar->lugar_turistico}}</p> 

                                   <label class="lblfew">
                                   <p class="fechalbl">
                                   FECHA SELECCIONADA:
                                   </p>
              
                                   <input type=text name="fecha"  id="date-select" value="" >

                                   </label>

                                   <h2 class="preciotut">Precio del VIaje</h2>
                                   <br>
                                          <p class="canrlbl">
                                          PRECIO POR LA CANTIDAD DE BOLETOS:
                                          </p>
                                          <input type=text name="price" id="price-select"  value="">


                                   <br>



                                   <label >
                                          <p class="horarilbl">
                                          PRECIO POR ESTE HORARIO:                                          </p>
                                          <input type=text name="price" id="price-select"  value="">

                                   </label>
                                   <br>
                                   
                            </div>

                            </section>





<!--  
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
-->
                     </form>
              </section>
       
              

              </div>



<script type="text/javascript"  src="{{asset('/js/show.js')}}"></script>
</html>

@endsection
