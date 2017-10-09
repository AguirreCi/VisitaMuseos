@extends('plantilla.main')

<!--Nombro la Seccion-->
@section('title') 
Entretenimiento
@endsection

@section('contenido')

<br>
<h1 class="text-center">Entretenimiento</h1>

<br>

<div class="container">
	<div class="row">

		<div class="card col-md-4">

		    <!--Card image-->
		    <img class="img-fluid" style="height: 245px;" src="{{ asset('imagenes/puzzle/guemes.jpg') }}" alt="Card image cap">

		    <!--Card content-->
		    <div class="card-body text-center">
		    	<h4 class="card-title">Martin Miguel de Guemes</h4>
		        <a href="/rompecabezas/1" class="btn btn-naranja">Rompecabezas</a>
		        <a href="/cruci/2" class="btn btn-rosa">Crucigrama</a>
		    </div>

		</div>

		<div class="card col-md-4">

		    <!--Card image-->
		    <img class="img-fluid" style="height: 245px;" src="{{ asset('imagenes/puzzle/belgrano.jpg') }}" alt="Card image cap">

		    <!--Card content-->
		    <div class="card-body text-center">
		    	<h4 class="card-title">Manuel Belgrano</h4>
		        <a href="/rompecabezas/2" class="btn btn-naranja">Rompecabezas</a>
		        <a href="/cruci/1" class="btn btn-rosa">Crucigrama</a>
		    </div>

		</div>

		<div class="card col-md-4">

		    <!--Card image-->
		    <img class="img-fluid" style="height: 245px;" src="{{ asset('imagenes/puzzle/cabildo.jpg') }}" alt="Card image cap">

		    <!--Card content-->
		    <div class="card-body text-center">
		    	<h4 class="card-title">Museo Cabildo</h4>
		        <a href="/rompecabezas/3" class="btn btn-naranja">Rompecabezas</a>
		        <a href="/cruci/3" class="btn btn-rosa">Crucigrama</a>
		    </div>

		</div>
		
	</div>
</div>

@endsection