@extends('plantilla.main')

<!--Nombro la Seccion-->
@section('title') 
El museo segun..
@endsection

@section('contenido')

@if(!empty($info->first()))
@foreach($info as $item)

<div class="parallax-window" data-parallax="scroll" style="min-height: 1400px; background: transparent;" data-image-src="{{ asset($item['usuario']['fondo']) }}">
	<div class="container" style="padding-top: 5%">
		<div class="row align-items-center">
			<div class="col-md-auto">
				<img class="rounded-circle" src="{{ $item['usuario']['imagen']}}" style="height: 50px; width: 50px;">
			</div>
			<div class="col-md-auto">
				<h4 class="white-text">{{$item['usuario']['nombre']}}</h4>
			</div>
		</div>
	</div>
	<br>
	<br>
	<div class="container" style="height: auto;">
		<div class="jumbotron" style="background-color: rgba(255, 255, 255, 0.69); border-radius: 20px;">
			<h1 class="h1-responsive">Obras Favoritas</h1>
			<hr class="my-2">
			<div class="container" style="overflow-x: scroll; display: inline-flex; height: 200px;">
				@foreach($item['obras'] as $obra)
				<div class="col-md-auto" style="height: 120px; width: 150px; ">
					@component('plantilla.componentes.fotogaleria')
					@slot('idimagen')
					{{'obra'.$obra['id']}}
					@endslot
					@slot('texto')
					{{$obra['comentario']}}
					@endslot
					@slot('titulo')
					@endslot
					@slot('img')
					{{$obra['url']}}
					@endslot
					@endcomponent
					@if($obra['fav']==1)
					<h2 class="text-center"><i class="fa fa-check-circle " style="color: #4285F4;" aria-hidden="true"></i></h2>
					@else
					@endif
				</div>
				@endforeach
			</div>
		</div>

		<br>
		<br>
				<div class="jumbotron" style="background-color: rgba(255, 255, 255, 0.69); border-radius: 20px;">
			<h1 class="h1-responsive">Fotos</h1>
			<hr class="my-2">
			<div class="container" style="overflow-x: scroll; display: inline-flex; height: 200px">
					@foreach($item['archivos'] as $foto)
					<div class="col-md-auto" style="height: 120px; width: 150px;">
						@if($foto['tipo']==1)
						@component('plantilla.componentes.fotogaleria')
						@slot('idimagen')
						{{'foto'.$foto['id']}}
						@endslot
						@slot('texto')
						@endslot
						@slot('titulo')
						@endslot
						@slot('img')
						{{$foto['url']}}
						@endslot
						@endcomponent
						@else
						@endif
					</div>
					@endforeach

			</div>
		</div>

				<br>
		<br>
				<div class="jumbotron" style="background-color: rgba(255, 255, 255, 0.69); border-radius: 20px;">
			<h1 class="h1-responsive">Audioguias</h1>
			<hr class="my-2">
			<div class="container" style="overflow-y: scroll; height: 300px;">
				@foreach($item['archivos'] as $audio)
						@if($audio['tipo']==2)
						@component('plantilla.componentes.audios')
						@slot('fecha')
						{{date('d F Y', strtotime($audio['created_at']))}}
						@endslot
						@slot('audio')
						{{$audio['url']}}
						@endslot
						@endcomponent
						@else
						@endif
						@endforeach
				<br>
			</div>
		</div>

	</div>
</div>
@endforeach
@else
@endif
@endsection

