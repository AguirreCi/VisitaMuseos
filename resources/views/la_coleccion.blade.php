@extends('plantilla.main')

<!--Nombro la Seccion-->
@section('title') 
    La colección
@endsection

@section('contenido')
<br>
<div class="text-center">
	<h2>La colección</h2>
</div>
<br>
<div class="container">
    <div class="row">
@if(!empty($obras->first()))

@foreach($obras as $obra)
<div style="height: 400px;" class="col-md-6 text-center">
@component('plantilla.componentes.fotogaleria')
@slot('img')
{{$obra['url']}}
@endslot
@slot('idimagen')
{{'obra'.$obra['id']}}
@endslot
@slot('titulo')
@endslot
@slot('texto')
{{$obra['comentario']}}
@endslot
@endcomponent
</div>
@endforeach
@else
@endif
</div>
</div>
@endsection