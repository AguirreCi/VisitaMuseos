<a href="/vision/{{$user}}">
<div class="parallax-window view hm-black-strong" data-parallax="scroll" style="min-height: 300px; background: transparent;" data-image-src="{{ $fondo }}">
	<div class="mask flex waves-effect waves-light">
		<div class="container" style="padding-top: 5%">
			<div class="row align-items-center">
				<div class="col-md-auto">
					<img class="rounded-circle" src="{{ $imagen }}" style="height: 50px; width: 50px;">
				</div>
				<div class="col-md-auto">
					<h4 class="white-text">{{$nombre}}</h4>
				</div>
			</div>
		</div>
		<div class="align-items-center text-center">
			<h3 class="white-text" style="opacity: 0.7">Hace click para ver más.</h4>
		</div>
	</div>
</div>
</a>