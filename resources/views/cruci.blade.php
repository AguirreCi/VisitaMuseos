@extends('plantilla.main')

<!--Nombro la Seccion-->
@section('title') 
Entretenimiento
@endsection

@section('contenido')
<br>
<h1 class="text-center">Crucigrama</h1>
<br>

@if($id == 1)
<iframe class="w-100" style="height:800px;" src="{{ route('cruci1') }}"></iframe>
@endif
@if($id == 2)
<iframe class="w-100" style="height: 800px;" src="{{ route('cruci2') }}"></iframe>
@endif
@if($id == 3)
<iframe class="w-100" style="height: 800px;" src="{{ route('cruci3') }}"></iframe>
@endif

@endsection