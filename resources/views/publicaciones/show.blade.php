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
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section profile">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body profile-card pb-4 d-flex flex-column align-items-center">
                        <h5 class="card-title">{{$post->titulo}}</h5>
                        <div class="row">
                            <div class="col-lg-12">
                                <img id="imgpos" src="{{ asset('uploads').'/' . $post->imagen}}" class="card-img-top" alt="Imagen del post {{$post->titulo}}">
                            </div>
                            <div class="d-flex bd-highlight">
                                <div class="pt-2 flex-grow-1 bd-highlight">
                                    <form action="{{route('likes.store',['post' => $post])}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                                        <button class="btn btn-primary" type="submit" >Dar like!</button>
                                    </form>
                                    <span class="text-muted small ps-1">{{$post->likes->count()}} me gusta</span>
                                </div>
                                <div class="pt-2 bd-highlight"><span class="text-muted small ps-1">{{$post->created_at->diffForHumans()}}</span></div>
                            </div>
                            <div class="d-flex bd-highlight">
                                <div class="pt-2 flex-grow-1 bd-highlight">
                                    <h2 style="font-size: 18px;">Descripción: </h2>
                                    <h3>{{$post->descripcion}}</h3>
                                </div>
                                <div class="pt-3 bd-highlight">
                                    @auth
                                    @if($post->user_id == auth()->user()->id)
                                    <form method="POST" action="{{route('publicaciones.destroy', $post)}}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Eliminar Post" class="btn btn-danger"/>
                                    </form>
                                    @endif
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <h5 class="card-title">Comentarios</h5>
                            @foreach($post->comentario as $comment)
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
                                <input type="hidden" name="post_id" value="{{ $post->id }}">
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
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
