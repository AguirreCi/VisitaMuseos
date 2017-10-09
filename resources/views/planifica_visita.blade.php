@extends('plantilla.main')

<!--Nombro la Seccion-->
@section('title') 
    Planifica tu Visita
@endsection

@section('contenido')
<br>
<h1 class="text-center font-weight-normal">Organiza tu recorrido</h1>
<h4 class="text-center">Planifica tu visita, para vivir una experiencia inolvidable</h4>
<br>

<div class="container w-100">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3622.158000614603!2d-65.41267508543312!3d-24.790042684087208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x941bc3a3556dfe2f%3A0x741b8b44ff548ac8!2sCaseros+541%2C+Salta%2C+Argentina!5e0!3m2!1ses!2sus!4v1505497442140" width="2500" height="400" frameborder="0" style="border:0" allowfullscreen class="w-100"></iframe>
</div>

<br>
<div class="container">
   <div class="row justify-content-md-center">
      <div class="col text-center">
        <h1><i class="fa fa-clock-o" aria-hidden="true"></i></h1>
	      <h4><b>Horario de visita</b></h4>
	      <p>Lunes a Domingo</p>
	      <p>Mañana: 9:00 a 14:00</p>
	      <p>Tarde: 15:00 a 19:00</p>
      </div>
      <div class="col text-center">
        <i class="material-icons" style="font-size: 48px;">money_off</i>
	      <h4><b>Entrada</b></h4>
	      <p>Gratuita</p>
	      <p><b>Bono contribución</b></p>
	      <p>$20</p>
      </div>
      <div class="col text-center">
        <i class="material-icons" style="font-size: 48px;">record_voice_over</i>
	      <h4><b>Visitas Guiadas</b></h4>
	      <p>Lunes a Domingo</p>
	      <p>Mañana: 9:30 a 11:00</p>
	      <p>Tarde: 15:00 a 16:00</p>
      </div>
      <div class="col text-center">
        <h1><i class="fa fa-map-marker" aria-hidden="true"></i></h1>
	      <h4><b>Dirección</b></h4>
	      <p>Caseros 541 - Cod (4400)</p>
      </div>
  </div>
  <br>
  <br>

  <div class="row align-items-center">
  	<div class="col-md-8 text-center">
      <img class="img-fluid z-depth-1" style="height: 402px;" src="{{ asset('imagenes/visita1.jpg') }}">
    </div>
    <div class="col-md-4">
      <h5 class="text-justify">Si venís en grupo, no es necesario presentar ninguna nota con antelación. En caso de querer una visita guiada, solo debes llamar para coordinar la misma. Teléfono 0387 421-5340</h5>
    </div>
  </div>
  <br>
  <br>
    <div class="row align-items-center">
	    <div class="col-md-8 text-center">
	     	<h2 class="text-center ">Prepara tu Visita</h2> 
	  		<h2 class="text-center">Conoce la Nueva apliación para</h2>
	  		<h2 class="text-center">vivir una experiencia inovidable</h2>
	  		<button type="button" class="btn btn-outline-primary waves-effect">Empieza Ya</button>
	    </div>
    <div class="col-md-4 text-center">
      <img class="img-fluid z-depth-1" style="height: 558px;" src="{{ asset('imagenes/visita2.jpg') }}">
    </div>
  </div>
</div>

@endsection