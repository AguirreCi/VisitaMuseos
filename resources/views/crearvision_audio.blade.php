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
		<a class="nav-link" href="{{ route('crear') }}" role="tab" aria-controls="v-pills-perfil" aria-expanded="true">Perfil</a>
		<a class="nav-link" href="{{ route('crear_obra') }}" role="tab" aria-controls="v-pills-obras" aria-expanded="true">Obras Favoritas</a>
		<a class="nav-link"  href="{{ route('crear_foto') }}" role="tab" aria-controls="v-pills-fotos" aria-expanded="true">Fotos</a>
		<a class="nav-link active" href="{{ route('crear_audio') }}" role="tab" aria-controls="v-pills-audioguias" aria-expanded="true">Audioguias</a>
	</div>
	<div class="tab-content col-md-8" id="v-pills-tabContent">
	<div class="tab-pane fade show active" id="v-pills-audioguias" role="tabpanel" aria-labelledby="v-pills-audioguias-tab">
		<div class="container">
			<h3 class="text-center">Tus Audioguias</h3>
			<div class="card">
				<div class="card-body container" style="overflow-y: scroll; height: 300px;">
					@if(!empty($audios->first()))
					@foreach($audios as $audio)
					<div class="container">
						@component('plantilla.componentes.audios')
						@slot('audio')
						{{$audio['url']}}
						@endslot
						@slot('fecha')
						{{date('d F Y', strtotime($audio['created_at']))}}
						@endslot
						@endcomponent
					</div>
					@endforeach
					@else
					<h6 class="mx-auto">Aun no hay fotos..</h6>
					@endif
				</div>
			</div>
			<br>
			<h3 class="text-center">Agregar Audioguias</h3>
			<div class="card">
							<div class="card-body container text-center">
								<form action="{{ route('guardar') }}" class="dropzone" id="my-awesome-dropzone">
									{{ csrf_field() }}

									<input type="hidden" name="tipo" value="2">

								</form>
							</div>
							<a href="{{ route('crear_audio') }}" class="btn btn-naranja">Terminar</a>
						</div>
		</div>
	</div>
</div>
</div>


@endsection
