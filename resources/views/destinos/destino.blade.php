


<h1>Directorio de destinos  aqui</h1> 
@foreach ($destinos as $destino)
<p><strong>DESTINO:</strong>{{$destino->name}} </p>
<p><strong>IMAGEN DEL DESTINO:</strong>
<div class ="card">
       <img class="card-img-top" src="{{asset($destino->image)}}"  alt="">
</div>
</p>
<a href={{route('MostrarSubdestino.show',$destino->id)}}>seleccionar destino</a>
    
@endforeach
{{$destinos->links()}}
      
  


