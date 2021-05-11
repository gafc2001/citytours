
       <h1> NOMBRE DEL DESTINO {{$destino->name}} </h1> 
       <h1>  IMAGEN DEL DESTINO{{$destino->image}}</h1> 

       @foreach ($subdestinos as $subdestino)
       <li>NOMBRE SUBDESTINO: {{$subdestino->subdestino}} </li>
       <li> IMAGEN DEL SUBDESTINO: {{$subdestino->imagenS}} </li>
       <li>NOMBRE DEL LUGAR TURISTICO DE SUBDESTINO: {{$subdestino->lugar}} </li>
       <li>IMAGEN DEL LUGAR: {{$subdestino->imagenL}} </li>

       <a href="">seleccionar sitio</a>
       @endforeach
       


