@extends('layouts.plantilla')

  <section class="cabecera">
  <section class="imagen">           
      <img src="{{asset('storage/img/'.$destino->imagen)}}" alt="">
  <h2>{{$destino->departamento}}</h2>
  </section>
  </section>
    @section('content')
    <a href="{{route('destinos.index')}}">Volver a destinos</a>


       <section class="contenido">
        <section class="subdestinos-cont">

            <!--- Carrusel de Boostrap-->

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <!-- Botones de Cambio -->

                    @foreach ($subdestinos as $subdestino) 
                      @if ($loop->first)
                      <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->index}}" class="carouselItem active" ></li>
                      @else
                      <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->index}}" class="carouselItem" ></li>
                      @endif
                      
                     @endforeach
                </ol>

                <!-- Sudestinos -->
                <div class="carousel-inner">

                @foreach ($subdestinos as $subdestino)

                  @if ($loop->first)
                  
                  <div class="carousel-item active" index="{{$subdestino->turisticoid}}">
                      <a href="{{route('compra.show',$subdestino->turisticoid)}}">
                        <img class="d-block w-100" src="{{asset('storage/img/'.$subdestino->imagenL)}}" >
                        
                        <div class="carousel-caption d-none d-md-block">
                          <h5>{{$subdestino->lugar_turistico}}</h5>
                          <p>Te da la Bienvenida </p>
                        </div>
                      </a>
                      
                    </div>
                  @else
                  <div class="carousel-item" index="{{$subdestino->turisticoid}}">
                    <a href="{{route('compra.show',$subdestino->turisticoid)}}">
                      <img class="d-block w-100" src="{{asset('storage/img/'.$subdestino->imagenL)}}" >
                      <div class="carousel-caption d-none d-md-block">
                        <h5>{{$subdestino->lugar_turistico}}</h5>
                        <p>Te da la Bienvenida</p>
                      </div>
                    </a>
                  </div>
                  @endif
                  

                @endforeach
                </div>

                <!-- Botones de Cambio -->
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>                  
                </a>
                
              </div>
              
              
            <!--- Carrusel de Boostrap (FIN)-->


        </section>
        <section class="descripcion">
            <section class="cont-letra"> 
                <p>Lorem ipsum dps`dps`dspd`psd`spdosdkiosjdisjdisjdisjdisjdisjdisjdisjdisjdisjdisjdisjdsijdisdjsidjsddolor sit amet consectetur adipisicing elit. Similique distinctio neque, beatae quisquam labore perspiciatis voluptatem, voluptates, eius officiis in eligendi aspernatur voluptate provident laboriosam debitis tempore ullam dicta excepturi!asasasalsklasñalspalsñlañslañslñalñslasdswdsd kskwkedwde33pkr4,f5okfo5fo5,fo5,fo5jo3434p3lep3ldp3lpd34po3p4of,lr,fo4eori4re
                </p>
            </section>
            <section class="Sitios-Turisticos">
                <H3>Tours</H3>
                
                    <section class="cont-sitios">
                        
                      @foreach ($subdestinos as $subdestino) 
                        <div class="sitio1">
                          <img src="{{asset('storage/img/'.$subdestino->imagenT)}}" alt="" >
                          <p>{{$subdestino->tour}}</p>
                        </div>
                        @endforeach
       
                      </section>


            </section>



              
           
        </section>
    </section>

@endsection
