@extends('plantilla.main')

<!--Nombro la Seccion-->
@section('title') 
    Inicio
@endsection

@section('contenido') 
<br>
<h1 class="text-center font-weight-normal">Convertí tu visita en una experiencia monumental</h1>
<h4 class="text-center">El cabildo esconde entre sus muros infinitas historias, animate a descubrirlas.</h4>


<!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
        <li data-target="#carousel-example-1z" data-slide-to="3"></li>
        <li data-target="#carousel-example-1z" data-slide-to="4"></li>
        <li data-target="#carousel-example-1z" data-slide-to="5"></li>
        <li data-target="#carousel-example-1z" data-slide-to="6"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox" style="height: 471px; display: -webkit-inline-box;">
        <!--First slide-->
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('imagenes/imagenes carrusel/carrusel1.jpg') }}" alt="First slide">
        </div>
        <!--/First slide-->
        <!--Second slide-->
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('imagenes/imagenes carrusel/carrusel2.jpg') }}" alt="Second slide">
        </div>
        <!--/Second slide-->
        <!--Third slide-->
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('imagenes/imagenes carrusel/carrusel3.jpg') }}" alt="Third slide">
        </div>
        <!--/Third slide-->
        <!--Fourth slide-->
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('imagenes/imagenes carrusel/carrusel4.jpg') }}" alt="Fourth slide">
        </div>
        <!--/Fourth slide-->
        <!--Fifth slide-->
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('imagenes/imagenes carrusel/carrusel5.jpg') }}" alt="Fifth slide">
        </div>
        <!--/Fifth slide-->
        <!--Sixth slide-->
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('imagenes/imagenes carrusel/carrusel6.jpg') }}" alt="Sixth slide">
        </div>
        <!--/Sixth slide-->
        <!--Seventh slide-->
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('imagenes/imagenes carrusel/carrusel7.jpg') }}" alt="Seventh slide">
        </div>
        <!--/Seventh slide-->
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
<br>
<div class="container">
   <div class="row justify-content-md-center">
      <div class="col">
        <h4><b>Dirección</b></h4>
        <p>Caseros 541 - Cod (4400)</p>
      </div>
      <div class="col">
        <h4><b>Horario de visita</b></h4>
        <p>Lunes a Domingo</p>
        <p>Mañana: 9:00 a 14:00</p>
        <p>Tarde: 15:00 a 19:00</p>
      </div>
      <div class="col">
        <h4><b>Entrada</b></h4>
        <p>Gratuita</p>
        <p><b>Bono contribución</b></p>
        <p>$20</p>
      </div>
      <div class="col">
        <h4><b>Visitas Guiadas</b></h4>
        <p>Lunes a Domingo</p>
        <p>Mañana: 9:30 a 11:00</p>
        <p>Tarde: 15:00 a 16:00</p>
      </div>
  </div>
  <br>
  <br>
  <div class="row align-items-center">
    <div class="col">
      <h5 class="text-justify">El cabildo abrió sus puertas como museo histórico del Norte en 1949, tras la restauración del arquitecto Mario Buchiazzo.
Belgrano ha colgado en su balcón nuestro pabellón patrio después de ganar la batalla del 20 de febrero, Güemes ha sido designado gobernador y ejerció gobierno desde esta provincia, en él también se decidió apoyar la revolución de mayo de 1810. Estas y muchas historias más se esconden entre sus muros.
Actualmente el museo cuanta con un recorrido que inicia desde el periodo prehistórico, recorre la época colonial y finaliza en la historia de la independencia, diez mil años de historia que podes experimentar.</h5>
    </div>
    <div class="col text-center">
      <img class="img-fluid z-depth-1" style="height: 481px;" src="{{ asset('imagenes/veleta.jpg') }}">
    </div>
  </div>
</div>
<br>
<br>
<br>
<h2 class="text-center font-weight-normal">Descubrí cada uno de sus rincones</h2>
<h4 class="text-center">A traves de un recorrido fotográfico conocé los distintos espacios del Cabildo</h4>
<br>
<div class="text-center">
  <a class="btn btn-outline-primary waves-effect" href="{{ route('el_edificio') }}">Empieza Ya</a>
</div>
<br>
<div class="container w-100">
  <div class="row justify-content-md-center">
    <div class="col">
      <img class="w-100" style="height: 155px" src="{{ asset('imagenes/imagenes carrusel/carrusel3.jpg') }}">
    </div>
    <div class="col">
      <img class="w-100" style="height: 155px"  src="{{ asset('imagenes/imagenes carrusel/carrusel4.jpg') }}">
    </div>
    <div class="col">
      <img class="w-100" style="height: 155px"  src="{{ asset('imagenes/imagenes carrusel/carrusel6.jpg') }}">
    </div>
    <div class="col">
      <img class="w-100" style="height: 155px"  src="{{ asset('imagenes/imagenes carrusel/carrusel7.jpg') }}">
    </div>
</div>
</div>
<br>
<br>
<h2 class="text-center font-weight-normal">Explora en el tiempo las historias del Cabildo</h2>
<h4 class="text-center">A traves de una línea de tiempo recorre el camino que lo convirtió en lo que es hoy.</h4>
<br>
<div class="text-center">
  <a class="btn btn-outline-verde waves-effect" href="{{ route('su_historia') }}">Empieza Ya</a>
</div>
<br>
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col"><h5><b>1582</b></h5></div>
    <div class="col"></div>
    <div class="col"><h5><b>1676</b></h5></div>
    <div class="col"></div>
    <div class="col"><h5><b>1797</b></h5></div>
    <div class="col"></div>
    <div class="col"><h5><b>1821</b></h5></div>
    <div class="col"></div>
    <div class="col"><h5><b>1942</b></h5></div>
    <div class="col"></div>
  </div>
  <div class="elegant-color-dark" style="height: 3px; margin-top: 10px; margin-bottom: 15px;  ">
  </div>
  <div class="row justify-content-md-center">
    <div class="col"></div>
    <div class="col"><h5><b>1626</b></h5></div>
    <div class="col"></div>
    <div class="col"><h5><b>1789</b></h5></div>
    <div class="col"></div>
    <div class="col"><h5><b>1807</b></h5></div>
    <div class="col"></div>
    <div class="col"><h5><b>1889</b></h5></div>
    <div class="col"></div>
    <div class="col"><h5><b>1949</b></h5></div>
  </div>
</div>
<br>
<br>
<h2 class="text-center font-weight-normal">Sorprendete descubriendo estos personajes en 1810</h2>
<h4 class="text-center">¿Los conóces? También estuvieron en la revolución de Mayo.</h4>
<br>
<div class="text-center">
  <button type="button" class="btn btn-outline-rosa waves-effect">Empieza Ya</button>
</div>
<br>


@endsection