@extends('plantilla.main')

<!--Nombro la Seccion-->
@section('title') 
    El edificio
@endsection

@section('contenido')
<br>
<div class="text-center">
	<h2>El edificio</h2>
</div>
<br>
<div class="container">
  <div class="row">
  <div class="col-md-6" style="height: 400px;">
    @component('plantilla.componentes.fotogaleria')
    @slot('idimagen')
    img1
    @endslot
    @slot('img')
    {{ asset('imagenes/edificio/edificio1.jpg') }}
    @endslot
    @slot('titulo')
    Fachada
    @endslot

    @slot('texto')
    El frente aporticado posee un desfasaje entre los arcos superiores e inferiores. Esto se debe a que, aunque se haya buscado la simetría, se prefirió enfatizar las entradas principales del edificio con arcos de mayores dimensiones. El resultado, es una fachada dinámica, pero asimétrica, aunque con un gran equilibrio compositivo
    @endslot

    @endcomponent
  </div>
  <div class="col-md-6" style="height: 400px;">
    @component('plantilla.componentes.fotogaleria')
    @slot('idimagen')
    img3
    @endslot
    @slot('img')
    {{ asset('imagenes/edificio/edificio3.jpg') }}
    @endslot
    @slot('titulo')
    Patio Principal
    @endslot

    @slot('texto')
    En este segundo patio se puede apreciar el acceso a planta alta, lugar donde se llevaban a cabo las funciones de mayor jerarquía, como las reuniones de los cabildantes en la Sala Capitular, es por esta razón que este patio aun siendo de menor dimensión, era el patio principal.
    @endslot

    @endcomponent
  </div>
  <div class="col-md-6" style="height: 400px;">
    @component('plantilla.componentes.fotogaleria')
    @slot('idimagen')
    img4
    @endslot
    @slot('img')
    {{ asset('imagenes/edificio/edificio4.jpg') }}
    @endslot
    @slot('titulo')
    La torre y la veleta
    @endslot

    @slot('texto')
    La construcción de la torre se hizo para colocar en lugar visible el reloj público que se había sacado de la Iglesia de la Compañía de Jesús.
    @endslot

    @endcomponent
  </div>
  <div class="col-md-6" style="height: 400px;">
    @component('plantilla.componentes.fotogaleria')
    @slot('idimagen')
    img2
    @endslot
    @slot('img')
    {{ asset('imagenes/edificio/edificio2.jpg') }}
    @endslot
    @slot('titulo')
    Patio Secundario
    @endslot

    @slot('texto')
    Allí se encontraban los locales que pertenecían al cuartel general y la cocina.
    A su mano derecha se encuentran las habitaciones que eran calabozos de la cárcel.
    Donde se encontraban los calabozos, se exhibe hoy la historia del periodo Independiente.
    @endslot

    @endcomponent    
  </div>

<div class="col-md-6" style="height: 400px;">
  @component('plantilla.componentes.fotogaleria')
  @slot('idimagen')
  img5
  @endslot
  @slot('img')
  {{ asset('imagenes/edificio/edificio5.jpg') }}
  @endslot
  @slot('titulo')
  Galeria planta alta
  @endslot

  @slot('texto')
  @endslot

  @endcomponent
</div>
<div class="col-md-6" style="height: 400px;">
  @component('plantilla.componentes.fotogaleria')
  @slot('idimagen')
  img6
  @endslot
  @slot('img')
  {{ asset('imagenes/edificio/edificio6.jpg') }}
  @endslot
  @slot('titulo')
  El balcón
  @endslot

  @slot('texto')
  En el medio se colocó el balcón en voladizo, es decir, que sobresale de la estructura, para acentuar la centralización del conjunto.

  Este balcón Belgrano colocó por primera vez la bandera argentina cuando se consiguió la victoria contra los realistas en la Batalla de Salta, el 20 de Febrero de 1813.
  Abajo del balcón se encuentra las ménsulas de madera tallada con figuras humanas.
  @endslot

  @endcomponent
</div>

</div>
</div>      
     
                                   
@endsection