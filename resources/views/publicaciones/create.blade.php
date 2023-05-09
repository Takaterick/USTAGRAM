@extends('layoutprincipal')
@extends('header')
@section('contenido')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Publicaciones</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
          <li class="breadcrumb-item">Publicaciones</li>
          <li class="breadcrumb-item active">Crear</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6">
            <div class="card">
            <div class="card-body">
              <h5 class="card-title">Nueva Publicación</h5>
              <form class="row g-3" action="{{route('publicaciones.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="col-md-12">
                  <div class="form-floating">
                    <input name="titulo" type="text" class="form-control" id="floatingName" placeholder="Your Name">
                    <label for="floatingName">Titulo</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea name="descripcion" class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;"></textarea>
                    <label for="floatingTextarea">Descripción</label>
                  </div>
                </div>
                <div class="col-12">
                  <input
                  type="hidden" 
                  name="imagen"
                  value="{{old('imagen')}}"
                  >
                  <div id="myDropzone" class="dropzone">
                    <div class="dz-default dz-message">
                      <button class="dz-button" type="button">
                        <img src="https://raw.githubusercontent.com/frankenstein291294/implement-dropzone-js/main/img/upload.png">
                      </button>
                    </div>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Publicar</button>
                  <button type="reset" class="btn btn-secondary">Cancelar</button>
                </div>
              </form>
            </div>
          </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
      Dropzone.autoDiscover = false;

      const dropzone = new Dropzone("#myDropzone",{
        url: '{{route('imagenes.store')}}',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        maxFiles: 1,
        maxFilesize: 2,
        acceptedFiles: ".png, .jpg",
        addRemoveLinks: true,
        dictRemoveFile: 'Eliminar archivos',

        init: function (){
          if(document.querySelector('[name = "imagen"]').value.trim()){
            const imagenPublicada = {};
            imagenPublicada.size = 2222;
            imagenPublicada.name = document.querySelector('[name = "imagen"]').value;
            this.options.addedfile.call(this, imagenPublicada);
            this.options.thumbnail.call(this, imagenPublicada, '/uploads/${imagenPublicada.name}');
            imagenPublicada.previewElement.classList.add("dz-success", "dz-complete");
          }
        },
      });

      dropzone.on("success", function (file, response){
        document.querySelector('[name = "imagen"]').value = response.imagen;
      });

      dropzone.on("remove", function (file, message){
        document.querySelector('[name = "imagen"]').value = "";
      });
    </script>
</main>
@endsection