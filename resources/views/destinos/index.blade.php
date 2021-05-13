
<h1>Directorio de destinos  aqui</h1> 
@foreach ($destinos as $destino)
<p><strong>DESTINO:</strong>{{$destino->departamento}} </p>

<p><strong>IMAGEN DEL DESTINO:</strong>
<div class ="card">
       <img class="card-img-top" src="{{asset('storage/img/'.$destino->imagen)}}"  alt="">
</div>
</p>
<a href={{route('destinos.show',$destino->id)}}>seleccionar destino</a>
    
@endforeach
{{$destinos->links()}}
      
  


