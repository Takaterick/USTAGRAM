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
<div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center">
      <div class="bg-image"></div>
        <div class="container" id="form">
          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-3">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="https://emovies.oui-iohe.org/wp-content/uploads/2020/09/logo-2-300x300.jpeg" alt="">
                  <span class="d-none d-lg-block">USTAGRAM</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-1">
                    <h5 class="card-title text-center pb-0 fs-4">Crear una cuenta</h5>
                    <p class="text-center small">Ingresa tu información personal para crear una cuenta</p>
                  </div>

                  <form class="row g-3" action="{{route("registrarse")}}" method="POST">
                    @csrf
                    <div class="col-md-6">
                      <label for="yourName" class="form-label">Nombre Completo</label>
                      <input type="text" name="name" class="form-control">
                      <!--<div class="invalid-feedback">Porfavor, ingresa tu nombre!</div>-->
                    </div>
                    @error('name')
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="bi bi-exclamation-octagon me-1"></i>
                        {{$message}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @enderror

                    <div class="col-6">
                      <label for="yourGenero" class="form-label">Genero</label>
                      <input type="text" name="genero" class="form-control" id="yourGenero" >
                      <!--<div class="invalid-feedback">Porfavor cambia tu nombre de usuario.</div>-->
                    </div>

                    @error('genero')
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="bi bi-exclamation-octagon me-1"></i>
                        {{$message}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @enderror

                    <div class="col-6">
                      <label for="yourEmail" class="form-label">Correo Electronico</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="email" name="email" class="form-control" id="yourEmail">
                        <!--<div class="invalid-feedback">Porfavor ingresa un correo valido!</div>-->
                      </div>
                    </div>
                    @error('email')
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="bi bi-exclamation-octagon me-1"></i>
                        {{$message}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @enderror

                    <div class="col-6">
                      <label for="yourPrograma" class="form-label">Programa</label>
                      <input type="text" name="programa" class="form-control" id="yourPrograma" >
                      <!--<div class="invalid-feedback">Porfavor cambia tu nombre de usuario.</div>-->
                    </div>

                    @error('programa')
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="bi bi-exclamation-octagon me-1"></i>
                        {{$message}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @enderror

                    <div class="col-6">
                      <label for="yourDireccion" class="form-label">Direccion</label>
                      <input type="text" name="direccion" class="form-control" id="yourDireccion" >
                      <!--<div class="invalid-feedback">Porfavor cambia tu nombre de usuario.</div>-->
                    </div>

                    @error('direccion')
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="bi bi-exclamation-octagon me-1"></i>
                        {{$message}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @enderror


                    <div class="col-4">
                      <label for="yourCelular" class="form-label">Celular</label>
                      <input type="text" name="celular" class="form-control" id="yourCelular" >
                      <!--<div class="invalid-feedback">Porfavor cambia tu nombre de usuario.</div>-->
                    </div>

                    @error('celular')
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="bi bi-exclamation-octagon me-1"></i>
                        {{$message}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @enderror

                    <div class="col-2">
                      <label for="yourSemestre" class="form-label">Semestre</label>
                      <input type="text" name="semestre" class="form-control" id="yourSemestre" >
                      <!--<div class="invalid-feedback">Porfavor cambia tu nombre de usuario.</div>-->
                    </div>

                    @error('semestre')
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="bi bi-exclamation-octagon me-1"></i>
                        {{$message}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @enderror

                    
                    <div class="col-12">
                      <label for="yourPresentacion" class="form-label">Presentacion</label>
                      <input type="text" name="presentacion" class="form-control" id="yourPresentacion" >
                      <!--<div class="invalid-feedback">Porfavor cambia tu nombre de usuario.</div>-->
                    </div>

                    @error('presentacion')
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="bi bi-exclamation-octagon me-1"></i>
                        {{$message}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @enderror

                    <div class="col-6">
                      <label for="yourUsername" class="form-label">Usuario</label>
                      <input type="text" name="username" class="form-control" id="yourUsername" >
                      <!--<div class="invalid-feedback">Porfavor cambia tu nombre de usuario.</div>-->
                    </div>

                    @error('username')
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="bi bi-exclamation-octagon me-1"></i>
                        {{$message}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @enderror

                    <div class="col-6">
                      <label for="yourPassword" class="form-label">Contraseña</label>
                      <input type="password" name="password" class="form-control" id="yourPassword">
                      <!--<div class="invalid-feedback">Porfavor, ingresa tu contraseña!</div>-->
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
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms">
                        <label class="form-check-label" for="acceptTerms">Estoy de acuerdo y acepto <a href="#">los términos y condiciones</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <input class="btn btn-primary w-100" type="submit" value="Crear cuenta">
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Ya tienes una cuenta? <a href="{{route("login")}}">Iniciar Sesion</a></p>
                    </div>
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
@endsection
