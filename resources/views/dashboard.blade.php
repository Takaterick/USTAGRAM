@extends('layoutprincipal')
@extends('header')
@section('contenido')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Perfil</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
          <li class="breadcrumb-item">Usuario</li>
          <li class="breadcrumb-item active">Perfil</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-3">

          <div class="card">
            <div class="card-body profile-card pt-5 pb-4 d-flex flex-column align-items-center">

              <img src="{{asset('assets/img/profile-img.jpg')}}" alt="Profile" >
              <h2>{{$user->name}}</h2>
              <h3>{{$user->programa}}</h3>
              <span class="text-muted small ps-1">{{$user->semestre}} semestre</span>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-github"></i></a>
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-7">
          <div class="card">
            <div class="card-body pb-0">
                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Detalles del Perfil</h5>

                  <div class="row">
                    <div class="col-lg-4 col-md-4 label">Presentación</div>
                    <div class="col-lg-8 col-md-8">
                    <p class="small fst-italic">
                      {{$user->presentacion}}
                    </p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-4 col-md-4 label">Nombre de Usuario</div>
                    <div class="col-lg-8 col-md-8">{{$user->username}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-4 col-md-4 label">Correo Electronico</div>
                    <div class="col-lg-8 col-md-8">{{$user->email}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-4 col-md-4 label">Celular</div>
                    <div class="col-lg-8 col-md-8">{{$user->celular}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-4 col-md-4 label">Dirección</div>
                    <div class="col-lg-8 col-md-8">{{$user->direccion}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-4 col-md-4 label">Genero</div>
                    <div class="col-lg-8 col-md-8">{{$user->genero}}</div>
                  </div>

                </div>

            </div>
          </div>
        </div>
        <div class="col-xl-2">
        <section class="section dashboard">
          <div class="row">
            <div class="col-lg-12">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Información <span>| Social</span></h5>

                  <div class="row align-items-center">
                  <div class="col-lg-12">
                    <div class="d-flex align-items-center">
                      <div class="">
                        <h6 class="text-success" style="font-size: 20px;">145 <span class="text-muted small pt-2 ps-1">Seguidores</span></h6>
                      </div>
                    </div>
                    <hr>
                    <div class="d-flex align-items-center">
                      <div class="">
                        <h6 class="text-success" style="font-size: 20px;">200 <span class="text-muted small pt-2 ps-1">Seguidos</span></h6>
                      </div>
                    </div>
                    <hr>
                    <div class="d-flex align-items-center">
                      <div class="">
                        <h6 class="text-success" style="font-size: 20px;">40<span class="text-muted small pt-2 ps-1">Publicaciones</span></h6>
                      </div>
                    </div>
                  </div>  
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <a type="button" href="{{route('publicaciones.create')}}" class="btn btn-success w-100">Crear publicación</a>
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered align-items-center justify-content-center" id="borderedTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="publicaciones-tab" data-bs-toggle="tab" data-bs-target="#bordered-publicaciones" type="button" role="tab" aria-controls="publicaciones" aria-selected="true"><i class="bi bi-table"> </i>Publicaciones</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="reels-tab" data-bs-toggle="tab" data-bs-target="#bordered-reels" type="button" role="tab" aria-controls="reels" aria-selected="false"><i class="bi bi-camera-reels"> </i>Reels</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="guardados-tab" data-bs-toggle="tab" data-bs-target="#bordered-guardados" type="button" role="tab" aria-controls="guardados" aria-selected="false"><i class="bi bi-bookmark-check"> </i>Guardados</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="etiquetadas-tab" data-bs-toggle="tab" data-bs-target="#bordered-etiquetadas" type="button" role="tab" aria-controls="etiquetadas" aria-selected="false"><i class="bi bi-people"> </i>Etiquetadas</button>
                </li>
              </ul>
              <div class="tab-content pt-2 align-items-center justify-content-center" id="borderedTabContent">
                <div class="tab-pane fade show active" id="bordered-publicaciones" role="tabpanel" aria-labelledby="publicaciones-tab">
                  <div class="row align-items-center justify-content-center">
                    <div class="col-lg-9">
                      <div class="row pt-2">
                        @foreach($posts as $post)
                          <div class="col-lg-4">
                            <div class="card">
                              <a href="{{route('publicaciones.show', ['post' => $post, 'user' => $user->username])}}">
                                <img src="{{ asset('uploads').'/' . $post->imagen}}" class="card-img-top" alt="Imagen del post {{$post->titulo}}">
                              </a>
                              <div class="card-body">
                                <h5 class="card-title">{{ $post->titulo }}</h5>
                                <p class="card-text">{{ $post->descripcion }}</p>
                              </div>
                            </div>
                          </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                  <div class="row align-items-center justify-content-center">
                    <div class="col-lg-9">
                    {{ $posts->links('pagination::bootstrap-5')}}
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="bordered-reels" role="tabpanel" aria-labelledby="reels-tab">
                  Nesciunt totam et. Consequuntur magnam aliquid eos nulla dolor iure eos quia. Accusantium distinctio omnis et atque fugiat. Itaque doloremque aliquid sint quasi quia distinctio similique. Voluptate nihil recusandae mollitia dolores. Ut laboriosam voluptatum dicta.
                </div>
                <div class="tab-pane fade" id="bordered-guardados" role="tabpanel" aria-labelledby="guardados-tab">
                  Saepe animi et soluta ad odit soluta sunt. Nihil quos omnis animi debitis cumque. Accusantium quibusdam perspiciatis qui qui omnis magnam. Officiis accusamus impedit molestias nostrum veniam. Qui amet ipsum iure. Dignissimos fuga tempore dolor.
                </div>
                <div class="tab-pane fade" id="bordered-etiquetadas" role="tabpanel" aria-labelledby="etiquetadas-tab">
                  aea
                </div>
              </div>
            </div><!-- End Bordered Tabs -->
          </div>
        </div>
      </div>
    </section>

  </main>
<footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>USTAGRAM</span></strong>. Todos los derechos reservados
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
    </div>
  </footer>
@endsection