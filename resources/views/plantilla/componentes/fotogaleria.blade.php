<!-- Button trigger modal -->
<a data-toggle="modal" data-target="#img{{$idimagen}}">
    <img src="{{ asset($img) }}" style="height: 100%; width: 100%; object-fit: cover;" alt="placeholder" class="img-thumbnail">
</a>

<!-- Modal -->
<div class="modal fade" id="img{{$idimagen}}" style="background-color: rgba(0, 0, 0, 0.92);" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <!--Content-->
            <div class="modal-header" style="border-bottom: 0px;">
            	<h3 class="modal-title w-100" id="myModalLabel"></h3>
                <a class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color: white;">&times;</span>
                </a>
            </div>        
            <div class="modal-body text-center">
            	<h5 style="color: white;">{{$titulo}}</h5>
                <img style="height: 400px; width: auto;" src="{{ asset($img) }}">
                <p style="color: white;">{{$texto}}</p>
            </div>
    </div>
</div>
<!-- Modal -->