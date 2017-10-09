@extends('plantilla.main')

<!--Nombro la Seccion-->
@section('title') 
    Experiencia Cabildo
@endsection

@section('contenido')

<br>
<h1 class="text-center font-weight-normal">Descubriendo nuevas experiencias</h1>
<h4 class="text-center">Un museo, múltiples historias.</h4>

<br>
<div class="parallax-window row justify-content-end" data-parallax="scroll" style="min-height: 600px; background: transparent;" data-image-src="{{ asset('imagenes/parallax/parallax1.jpg') }}">
	<div class="col-md-6 view hm-white-strong">
		   <div class="mask flex align-items-center text-center" style="padding-top: 30%;">
		       <h1 class="font-weight-bold">Recorrido virtual</h1>
		       <h4 class="text-justify" style="padding-left: 25%;padding-right: 25%;">Elige algunas de estas salas y viví desde tu casa la experiencia Cabildo.</h4>
		       <a class="btn btn-rosa" href="{{ route('recorrido_virtual') }}">Empieza ya</a>
		   </div>
	</div>
</div>


<div class="parallax-window row justify-content-end" style="min-height: 600px; background: transparent;" data-parallax="scroll" data-image-src="{{ asset('imagenes/parallax/parallax2.jpg') }}">
	<div class="col-md-6 view hm-white-strong">
		   <div class="mask flex align-items-center text-center" style="padding-top: 30%;">
		       <h1 class="font-weight-bold">El edificio</h1>
		       <h4 class="text-justify" style="padding-left: 25%;padding-right: 25%;">Sabías que el patrimonio más valioso del Museo Histórico del Norte es el mismo edifico que lo alberga. De los Cabildo de la Argentina es el que mejor se conserva.</h4>
		       <a class="btn btn-verde" href="{{ route('el_edificio') }}">Empieza ya</a>
		   </div>
	</div>
</div>


<div class="parallax-window row justify-content-end" style="min-height: 600px; background: transparent;" data-parallax="scroll" data-image-src="{{ asset('imagenes/parallax/parallax3.jpg') }}">
	<div class="col-md-6 view hm-white-strong">
		   <div class="mask flex align-items-center text-center" style="padding-top: 30%;">
		       <h1 class="font-weight-bold">Su historia</h1>
		       <h4 class="text-justify" style="padding-left: 25%;padding-right: 25%;">A través de una línea de tiempo recorre los momentos más importantes que lo constituyeron como tal.</h4>
		       <a class="btn btn-primary" href="{{ route('su_historia') }}">Empieza ya</a>
		   </div>
	</div>
</div>


<div class="parallax-window row justify-content-end" style="min-height: 600px; background: transparent;" data-parallax="scroll" data-image-src="{{ asset('imagenes/parallax/parallax4.jpg') }}">
	<div class="col-md-6 view hm-white-strong">
		   <div class="mask flex align-items-center text-center" style="padding-top: 30%;">
		       <h1 class="font-weight-bold">La colección</h1>
		       <h4 class="text-justify" style="padding-left: 25%;padding-right: 25%;">Encontrarás una selección de las obras más importantes que posee el museo para que puedas apreciarlas en fotografías de alta calidad.</h4>
		       <a class="btn btn-naranja" href="{{ route('la_coleccion') }}">Empieza ya</a>
		   </div>
	</div>
</div>


<div class="parallax-window row justify-content-end" style="min-height: 600px; background: transparent;" data-parallax="scroll" data-image-src="{{ asset('imagenes/parallax/parallax5.jpg') }}">
	<div class="col-md-6 view hm-white-strong">
		   <div class="mask flex align-items-center text-center" style="padding-top: 30%;">
		       <h1 class="font-weight-bold">Publicaciones</h1>
		       <h4 class="text-justify" style="padding-left: 25%;padding-right: 25%;">Conoce a través de distintos artículos hechos y curiosidades de nuestra historia.</h4>
		       <a class="btn btn-amarillo" href="{{ route('publicaciones') }}">Empieza ya</a>
		   </div>
	</div>
</div>

<script type="text/javascript">
	$('.parallax-window').parallax({
    naturalWidth: 1000,
    naturalHeight: 700
  });
</script>
<script type="text/javascript">
	jQuery(window).trigger('resize').trigger('scroll');
</script>

@endsection