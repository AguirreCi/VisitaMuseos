@extends('plantilla.main')

@section('title') 
Login
@endsection

@section('contenido') 

<br>
<br>
<!-- Form login -->
<div class="container py-5">
    <div class="card w-50 mx-auto">
        <div class="card-body">
            <h2 class="text-center">Login</h2>
            <br>
            <div class="container">
                <a href="{{ url('/auth/facebook') }}" class="btn btn-block btn-social btn-facebook text-center">
                <span class="fa fa-facebook"></span> Login con Facebook
                </a>

                <a href="{{ url('/auth/google') }}" class="btn btn-block btn-social btn-google text-center">
                <span class="fa fa-google"></span> Login con Google
                </a>

            </div>
        </div>
    </div>
</div>
<!-- Form login -->
<br>
<br>
@endsection
