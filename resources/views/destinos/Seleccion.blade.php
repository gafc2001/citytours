
       <h1> BIENVENIDO AL   DESTINO {{$destino->name}} </h1> 
       <h1>  IMAGEN DEL DESTINO: {{$destino->image}}</h1>
       <a href="{{route('Mostrardestinos.index')}}">Volver a destinos</a> 

       @foreach ($subdestinos as $subdestino)
       <p><strong> SUBDESTINO:</strong> {{$subdestino->subdestino}} </p>
       
       <p><strong>IMAGEN DEL SUBDESTINO </strong>
       <div class ="card">
              <img class="card-img-top" src="{{asset($subdestino->imagenS)}}"  alt="">
       </div>
       </p>

       <p><strong>NOMBRE DEL LUGAR TURISTICO DE SUBDESTINO:</strong> {{$subdestino->lugar}} </p>
       <p><strong>IMAGEN DEL LUGAR:</strong> {{$subdestino->imagenL}} </p>
       <p><strong>PRECIO DEL LUGAR:</strong>  {{$subdestino->precio}} </p>

       <a href="{{route('compra.show',$subdestino->lugarid)}}">seleccionar sitio</a>
       @endforeach
       


