@extends('plantilla.main')

<!--Nombro la Seccion-->
@section('title') 
Entretenimiento
@endsection

@section('contenido')
<br>
<h1 class="text-center">Rompecabezas</h1>
<br>
@if($id == 1)
<h3 class="text-center">Guemes</h3>
@endif
@if($id == 2)
<h3 class="text-center">Belgrano</h3>
@endif
@if($id == 3)
<h3 class="text-center">Cabildo</h3>
@endif

<br>
<br>

@if($id == 1)
<iframe class="w-100" style="height: 800px;" src="{{ route('puzzle_guemes') }}"></iframe>
@endif
@if($id == 2)
<iframe class="w-100" style="height: 800px;" src="{{ route('puzzle_belgrano') }}"></iframe>
@endif
@if($id == 3)
<iframe class="w-100" style="height: 800px;" src="{{ route('puzzle_cabildo') }}"></iframe>
@endif

@endsection