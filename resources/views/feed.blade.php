@extends('layoutprincipal')
@extends('header2')
@section('contenido')
<main id="main2" class="main2 pt-5">
    <section class="section profile pt-5">
        <div class="row d-flex justify-content-between">
            <div class="col-xl-3">
                <div class="card p-3" style="position: sticky; top:96px">
                    <ul class="sidebar-nav" id="sidebar-nav">
                        <li class="nav-item">
                        <a class="nav-link" href="index.html">
                            <i class="bi bi-grid"></i>
                            <span>INICIO</span>
                        </a>
                        </li><!-- End Dashboard Nav -->
                        <li class="nav-heading">Contenido</li>

                        <li class="nav-item">
                        <a class="nav-link collapsed" href="users-profile.html">
                            <i class="bi bi-person"></i>
                            <span>Perfil</span>
                        </a>
                        </li><!-- End Profile Page Nav -->

                        <li class="nav-item">
                        <a class="nav-link collapsed" href="pages-faq.html">
                        <i class="bi bi-people"></i>
                            <span>Amigos</span>
                        </a>
                        </li><!-- End F.A.Q Page Nav -->

                        <li class="nav-item">
                        <a class="nav-link collapsed" href="pages-contact.html">
                            <i class="bi bi-images"></i>
                            <span>Fotos</span>
                        </a>
                        </li><!-- End Contact Page Nav -->

                        <li class="nav-item">
                        <a class="nav-link collapsed" href="pages-register.html">
                            <i class="bi bi-card-list"></i>
                            <span>Publicaciones</span>
                        </a>
                        </li><!-- End Register Page Nav -->

                        <li class="nav-item">
                        <a class="nav-link collapsed" href="pages-login.html">
                        <i class="bi bi-file-play"></i>
                            <span>Estados</span>
                        </a>
                        </li><!-- End Login Page Nav -->
                    </ul>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                    @foreach($users as $user)
                    <div class="card">
                    @if($user->lastPost)
                    <div class="card-body profile-card pb-4 align-items-center">
                        <h5 class="card-title">{{$user->name}}</h5>
                        <img id="imgpos2" src="{{ asset('uploads').'/' . $user->lastPost->imagen}}" class="card-img-top" alt="Imagen del post {{$user->lastPost->titulo}}">
                            <div class="d-flex bd-highlight">
                                    <div class="pt-2 flex-grow-1 bd-highlight">
                                        <form action="{{route('likes.store',['post' => $user->lastPost])}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="post_id" value="{{ $user->lastPost->id }}">
                                            <button class="btn btn-primary" type="submit" >Dar like!</button>
                                        </form>
                                        <span class="text-muted small ps-1">{{$user->lastPost->likes->count()}} me gusta</span>
                                    </div>
                                    <div class="pt-2 bd-highlight"><span class="text-muted small ps-1">{{$user->lastPost->created_at->diffForHumans()}}</span></div>
                                </div>
                                <div class="d-flex bd-highlight pb-0">
                                    <div class="pt-2 flex-grow-1 bd-highlight">
                                        <h2 style="font-size: 18px;">Descripción: </h2>
                                        <h3>{{$user->lastPost->descripcion}}</h3>
                                    </div>
                                </div>
                                <hr>
                                <h5 class="card-title py-1">Comentarios</h5>
                            @foreach($user->lastPost->comentario as $comment)
                            <div class="row mb-2">
                                <div class="d-flex bd-highlight">
                                    <div class="ps-2 bd-highlight label">
                                        <a href="{{route('accesoseguro', $comment->user)}}">{{$comment->user->username}}:</a><br>
                                    </div>
                                    <div class="ps-2 bd-highlight">{{$comment->contenido}}</div>
                                </div>
                                <form action="{{ route('comentarios.destroy', $comment->id) }}" method="POST">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <button style="border: none; background: none;" class="ps-2 badge border-secondary border-1 text-secondary" type="submit">Eliminar</button>
                                </form>
                            </div>
                            @endforeach
                            <form method="post" action="{{route('comentarios.store')}}" class="row g-2">
                                @csrf
                                <input type="hidden" name="post_id" value="{{ $user->lastPost->id }}">
                                <div class="col-md-10">
                                    <input name="contenido" id="contenido" type="text" class="form-control" placeholder="Escriba un comentario">
                                </div>
                                <div class="col-md-2">
                                    <div class="d-grid">
                                        <button class="btn btn-primary" type="submit">Comentar</button>
                                    </div>
                                </div>
                            </form>
                            </div>
                         </div>
                         @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-xl-3 px-4">
                <section class="section dashboard" style="position: sticky; top:100px">
                <div class="card" style="position: sticky; top:100px">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

              <div class="news">
                <div class="post-item clearfix">
                  <img src="assets/img/news-1.jpg" alt="">
                  <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                  <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-2.jpg" alt="">
                  <h4><a href="#">Quidem autem et impedit</a></h4>
                  <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-3.jpg" alt="">
                  <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
                  <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-4.jpg" alt="">
                  <h4><a href="#">Laborum corporis quo dara net para</a></h4>
                  <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-5.jpg" alt="">
                  <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
                  <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
                </div>

              </div><!-- End sidebar recent posts-->

            </div>
          </div>
                </section>
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