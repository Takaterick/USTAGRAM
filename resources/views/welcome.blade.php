@extends("layoutprincipal")
<header>
  <!-- Background image -->
  <div class="relative overflow-hidden bg-no-repeat bg-cover" style="
    background-position: 50%;
    background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/146.webp');
    height: 350px;
  ">
    <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
      style="background-color: rgba(0, 0, 0, 0.75)">
      <div class="flex justify-center items-center h-full">
        <div class="text-center text-white px-6 md:px-12">
          <h1 class="text-5xl font-bold mt-0 mb-6">Heading</h1>
          <h3 class="text-3xl font-bold mb-8">Subeading</h3>
          <a type="button"
            class="inline-block px-6 py-2.5 border-2 border-white text-white font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out"
            data-mdb-ripple="true" data-mdb-ripple-color="light" href="{{route("registrarse")}}">
            Registrarse
          </a>
          <br>
          <br>
          <a type="button"
            class="inline-block px-6 py-2.5 border-2 border-white text-white font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out"
            data-mdb-ripple="true" data-mdb-ripple-color="light" href="{{route("sesion")}}">
            Iniciar sesion
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- Background image -->
</header>

@extends("layoutprincipal")
<br>
<br>
@section("Tituloh1")
Hola este es un contenedor hecho con blade
@endsection

@section("subtitulo")
Hola este es un contenedor hecho con blade
@endsection

@section('texto')
Hola este es un contenedor hecho con blade!
@endsection

<h1>@yield('Tituloh1')</h1>
    <h2>@yield('subtitulo')</h2>
    <h3>@yield('texto')</h3>