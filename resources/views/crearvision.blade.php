@extends('plantilla.main')

<!--Nombro la Seccion-->
@section('title') 
Crear
@endsection

@section('contenido')
<br>
<div class="text-center">
	<h1 class="font-weight-normal">Crea y compartí nuevas experiencias</h1>	
</div>
<br>
<br>

<div class="container-fluid row" style="padding-top:1%; min-height: 280px">
	<div class="nav flex-column nav-pills col-md-4" id="v-pills-tab" role="tablist">
		<a class="nav-link active" id="v-pills-perfil-tab" href="{{ route('crear') }}" role="tab" aria-controls="v-pills-perfil" aria-expanded="true">Perfil</a>
		<a class="nav-link" id="v-pills-obras-tab" href="{{ route('crear_obra') }}" role="tab" aria-controls="v-pills-obras" aria-expanded="true">Obras Favoritas</a>
		<a class="nav-link" id="v-pills-fotos-tab" href="{{ route('crear_foto') }}" role="tab" aria-controls="v-pills-fotos" aria-expanded="true">Fotos</a>
		<a class="nav-link" id="v-pills-audioguias-tab" href="{{ route('crear_audio') }}" role="tab" aria-controls="v-pills-audioguias" aria-expanded="true">Audioguias</a>
	</div>
	<div class="tab-content col-md-8" id="v-pills-tabContent">
		<div class="tab-pane fade show active" id="v-pills-perfil" role="tabpanel" aria-labelledby="v-pills-perfil-tab">
			<br>
			<br>
			<br>
			<div class="container text-center">
				<div class="card w-50 mx-auto" style="background: url({{ asset(Auth::user()->fondo) }})">
					<div class="card-body">
						<div class="row align-items-center">
							<div class="col-md-auto">
								<img class="rounded-circle" src="{{Auth::user()->imagen}}" style="height: 50px; width: 50px; border-radius: 50%;">
							</div>
							<div class="col-md-auto">
								<h4>{{Auth::user()->nombre}}</h4>
							</div>
						</div>
						<br>
						<div class="container" style="display: grid;">
							<a class="btn btn-naranja" href="{{ route('logout') }}"
							onclick="event.preventDefault();
							document.getElementById('logout-form').submit();">Salir</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								{{ csrf_field() }}
							</form>
						</div>
					</div>
				</div>
			</div>
			<br>
			<br>
			<br>
			<br>
			<form class="container" action="cambiar_fondo" method="POST" >
				{{ csrf_field() }}
				<h3 class="text-center">Cambiar fondo</h3>
				<input type="hidden" name="user" value="{{Auth::user()->id}}">
				<div class="card">
					<div class="card-body">
						<label>
							@if(Auth::user()->fondo == 'imagenes/background/screen1.jpg')
							<input type="radio" name="fondo" value="imagenes/background/screen1.jpg" checked="true" />
							@else
							<input type="radio" name="fondo" value="imagenes/background/screen1.jpg" />
							@endif
						  <img src="{{ asset('imagenes/background/screen1.jpg') }}" style="height: 60px; width: 60px;">
						</label>
						<label>
							@if(Auth::user()->fondo == 'imagenes/background/screen2.jpg')
							<input type="radio" name="fondo" value="imagenes/background/screen2.jpg" checked="true" />
							@else
							<input type="radio" name="fondo" value="imagenes/background/screen2.jpg" />
							@endif
						  <img src="{{ asset('imagenes/background/screen2.jpg') }}" style="height: 60px; width: 60px;">
						</label>
						<label>
							@if(Auth::user()->fondo == 'imagenes/background/screen3.jpg')
							<input type="radio" name="fondo" value="imagenes/background/screen3.jpg" checked="true" />
							@else
							<input type="radio" name="fondo" value="imagenes/background/screen3.jpg" />
							@endif
						  <img src="{{ asset('imagenes/background/screen3.jpg') }}" style="height: 60px; width: 60px;">
						</label>
					</div>
					<button type="submit" class="btn btn-verde" >Cambiar</button>
				</div>
				
			</form>

		</div>
	</div>
</div>


@endsection
