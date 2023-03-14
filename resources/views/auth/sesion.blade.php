@extends("layoutprincipal")
@section('contenido')
<style>
  .bg-image{
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    background: url('https://pbs.twimg.com/media/FeTjRv8XgAIyPRp.jpg');
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    z-index: 1;
    filter: blur(8px);
  -webkit-filter: blur(8px);
  }

  #form{
    z-index: 2;
  }
  #titulo{
    font-size: 30px;
  }
</style>
<main>
    <div class="container">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="bg-image"></div>
        <div class="container" id="form">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4" id="logo">
                <a href="#" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo2.png" alt="">
                  <span class="d-none d-lg-block" id="titulo">USTAGRAM</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3" style="border-radius: 15px">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Ingrese a su Cuenta</h5>
                    <p class="text-center small">Ingrese su nombre de usuario y contraseña para iniciar sesión</p>
                  </div>

                  <form class="row g-3" action="{{route("login")}}" method="POST">
                  @csrf

                  @if(session('mensaje'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <i class="bi bi-exclamation-octagon me-1"></i>
                      {{session('mensaje')}}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  @endif
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Usuario</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername">
                      </div>
                    </div>
                    @error('username')
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="bi bi-exclamation-octagon me-1"></i>
                        {{$message}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @enderror

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Contraseña</label>
                      <input type="password" name="password" class="form-control" id="yourPassword">
                    </div>
                    @error('password')
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="bi bi-exclamation-octagon me-1"></i>
                        {{$message}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @enderror

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Recordar</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Ingresar</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">¿No tienes una cuenta? <a href="{{route("registrarse")}}">Crea una cuenta</a></p>
                    </div>
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->
@endsection
