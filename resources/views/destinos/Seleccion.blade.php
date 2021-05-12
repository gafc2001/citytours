
       <h1> BIENVENIDO AL   DESTINO {{$destino->departamento}} </h1> 
       <h1>  IMAGEN DEL DESTINO: 
              <img class="card-img-top" src="{{asset('storage/img/'.$destino->imagen)}}"  alt="">
       </h1>
       <a href="{{route('Mostrardestinos.index')}}">Volver a destinos</a> 

       @foreach ($subdestinos as $subdestino)
       <p><strong> NOMBRE DEL LUGAR TURISTICO:</strong> {{$subdestino->lugar_turistico}} </p>
       
       <p><strong>IMAGEN DEL LUGAR TURISTICO </strong>
       <div class ="card">
              <img class="card-img-top" src="{{asset('storage/img/'.$subdestino->imagenL)}}"  alt="">
       </div>
       </p>

       <p><strong>NOMBRE DEL TOURS:</strong> {{$subdestino->tour}} </p>

       <p><strong>IMAGEN DEL TOURS: </strong>
       <div class ="card">
              <img class="card-img-top" src="{{asset('storage/img/'.$subdestino->imagenT)}}"  alt="">
       </div>
       </p>

       <a href="{{route('compra.show',$subdestino->turisticoid)}}">seleccionar lugar turistico</a>
       @endforeach
       


