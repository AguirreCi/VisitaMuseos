<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark elegant-color-dark scrolling-navbar" style="justify-content: center; display: grid;">

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('inicio') }}">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('visita') }}">Planifica tu visita</a>
            </li>
            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <div class="btn-group">
                    <a class="nav-link" href="{{ route('experiencia_cabildo') }}">Experiencia Cabildo</a>
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('la_coleccion') }}">La colección</a>
                        <a class="dropdown-item" href="{{ route('recorrido_virtual') }}">Recorrido Virtual</a>
                        <a class="dropdown-item" href="{{ route('el_edificio') }}">El edificio</a>
                        <a class="dropdown-item" href="{{ route('su_historia') }}">Su historia</a>
                        <a class="dropdown-item" href="{{ route('publicaciones') }}">Publicaciones</a>
                    </div>
                </div>
                
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('conversemos') }}">Conversemos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('el_museo_segun') }}">El museo según...</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('entretenimiento') }}">Entretenimiento</a>
            </li>

        </ul>
        <!-- Links -->
    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->