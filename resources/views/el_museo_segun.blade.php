@extends('plantilla.main')

<!--Nombro la Seccion-->
@section('title') 
    El museo segun..
@endsection

@section('contenido')

<div class="text-center">
	<h1 class="font-weight-normal">Crea y compartí nuevas experiencias</h1>
	<h4>Se parte de esta historia</h4>
</div>
@auth
<br>
<br>
<br>
<div class="container text-center">
	<div class="card w-50 mx-auto">
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
				<a href="{{ route('crear') }}" class="btn btn-primary">Comenzar a crear</a>
				<a class="btn btn-rosa" href="{{ route('logout') }}"
				onclick="event.preventDefault();
				document.getElementById('logout-form').submit();">
				Salir
			</a>

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
@endauth
@guest

				<div class="container card w-50 mx-auto">

				  <div class="card-body text-center">
				  	<h4 class="card-title">Queres dejar tu experiencia?</h4>
				    <p class="card-text">Inicia sesion y comenza a crear!</p>
        			<a href="{{ route('login') }}" class="btn btn-primary">Iniciar Sesión</a>
				  </div>
				</div>

<br>
	@if(!empty($users->first()))
	@foreach($users as $user)
	@component('plantilla.componentes.museousuario')
	@slot('user')
	{{$user['id']}}
	@endslot
	@slot('nombre')
	{{$user['nombre']}}
	@endslot
	@slot('imagen')
	{{$user['imagen']}}
	@endslot
	@slot('fondo')
	{{$user['fondo']}}
	@endslot
	@endcomponent
	@endforeach
	@else
	@endif
@endguest
@endsection

