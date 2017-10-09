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
		<a class="nav-link active" id="v-pills-obras-tab" href="{{ route('crear_obra') }}" role="tab" aria-controls="v-pills-obras" aria-expanded="true">Obras Favoritas</a>
		<a class="nav-link" id="v-pills-fotos-tab" href="{{ route('crear_foto') }}" role="tab" aria-controls="v-pills-fotos" aria-expanded="true">Fotos</a>
		<a class="nav-link" id="v-pills-audioguias-tab" href="{{ route('crear_audio') }}" role="tab" aria-controls="v-pills-audioguias" aria-expanded="true">Audioguias</a>
	</div>
	<div class="tab-content col-md-8" id="v-pills-tabContent">
		<div class="tab-pane fade show active" id="v-pills-obras" role="tabpanel" aria-labelledby="v-pills-obras-tab">

			<form action="{{ route('guardar_obra') }}" method="POST" class="container">
				{{ csrf_field() }}
				<input type="hidden" name="user" value="{{Auth::user()->id}}">
				<div class="container">
					<h3 class="text-center">Elegi tus Obras Favoritas</h3>
					<div class="card">
						<div class="card-body row container">
							@foreach($rta as $obra)
							<div class="col-md-4">
							<label class="text-center py-1" style="display: grid;">
								@component('plantilla.componentes.fotogaleria')
								@slot('idimagen')
								{{$obra['id']}}
								@endslot
								@slot('img')
								{{ asset($obra['url']) }}
								@endslot
								@slot('titulo')
								@endslot
								@slot('texto')
								{{$obra['comentario']}}
								@endslot

								@endcomponent
								<br>
								@if($obra['fav'] ==1)
								<input class="mx-auto" type="checkbox" name="obra[]" value="{{$obra['id']}}" checked="true">
							@else
							<input class="mx-auto md" type="checkbox" value="{{$obra['id']}}" name="obra[]">
						@endif
					</label>
					</div>
					@endforeach
				</div>
				<button type="submit" class="btn btn-naranja" >Guardar</button>
			</div>
			<br>
		</div>
	</form>

</div>

</div>
</div>


@endsection
