<!DOCTYPE html>
<html>
    <head>
        <title>Mapa</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body style="margin:0 auto;">
        <img style="width:360px; height:370px;" src="{{ asset('imagenes/pb.png') }}" alt="plantabaja" usemap="#plantabaja" />
        <map name="plantabaja">
            <area shape="circle" coords="97,71,6" alt="Medios de Transporte" href="{{ route('sala') }}"/>
            <area shape="circle" coords="139,136,6" alt="Gobernadores Salteños II" />
            <area shape="circle" coords="138,168,6" alt="Gobernadores Salteños I" />
            <area shape="circle" coords="139,199,6" alt="Arenales" />
            <area shape="circle" coords="138,230,6" alt="Guemes" />
            <area shape="circle" coords="138,260,6" alt="Belgrano" />
            <area shape="circle" coords="98,326,6" alt="Origenes de Nuestra Historia I" />
            <area shape="circle" coords="135,326,6" alt="Origenes de Nuestra Historia II" />
            <area shape="circle" coords="176,326,6" alt="Origenes de Nuestra Historia III" />
            <area shape="circle" coords="193,243,6" alt="PATIO der" />
            <area shape="circle" coords="63,194,6" alt="PATIO izq" />
            
            <area shape="circle" coords="158,299,4" alt="Tinajones" />
            <area shape="circle" coords="13,170,4" alt="desc" />
            <area shape="circle" coords="13,126,4" alt="desc" />
            <area shape="circle" coords="118,148,4" alt="desc" />
        </map>
    </body>
</html>