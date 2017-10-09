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
		<a class="nav-link" id="v-pills-perfil-tab" href="{{ route('crear') }}" role="tab" aria-controls="v-pills-perfil" aria-expanded="true">Perfil</a>
		<a class="nav-link" id="v-pills-obras-tab" href="{{ route('crear_obra') }}" role="tab" aria-controls="v-pills-obras" aria-expanded="true">Obras Favoritas</a>
		<a class="nav-link active" id="v-pills-fotos-tab" href="{{ route('crear_foto') }}" role="tab" aria-controls="v-pills-fotos" aria-expanded="true">Fotos</a>
		<a class="nav-link" id="v-pills-audioguias-tab" href="{{ route('crear_audio') }}" role="tab" aria-controls="v-pills-audioguias" aria-expanded="true">Audioguias</a>
	</div>
	<div class="tab-content col-md-8" id="v-pills-tabContent">
		<div class="tab-pane fade show active" id="v-pills-fotos" role="tabpanel" aria-labelledby="v-pills-fotos-tab">
			<div class="container">
				<h3 class="text-center">Tus Fotos</h3>
				<div class="card">
					<div class="card-body row container">
						@if(!empty($fotos->first()))
						@foreach($fotos as $foto)
						<div class="col-md-4">
							@component('plantilla.componentes.fotogaleria')
							@slot('idimagen')
							{{$foto['id']}}
							@endslot
							@slot('img')
							{{ asset($foto['url']) }}
							@endslot
							@slot('titulo')
							@endslot
							@slot('texto')
							@endslot
							@endcomponent
							<br>
						</div>
						@endforeach
						@else
						<h6 class="mx-auto">Aun no hay fotos..</h6>
						@endif
					</div>
				</div>
					<br>
					<h3 class="text-center">Agregar Fotos</h3>
						
						<div class="card">
							<div class="card-body container text-center">
								<form action="{{ route('guardar') }}" class="dropzone" id="my-awesome-dropzone">
									{{ csrf_field() }}

									<input type="hidden" name="tipo" value="1">

								</form>
							</div>
							<a href="{{ route('crear_foto') }}" class="btn btn-naranja">Terminar</a>
						</div>
</div>
</div>
</div>
</div>

@endsection
