@extends("layoutprincipal")
@section('contenido')
<div class="container">
        <div class="row vh-100 m-0 text-center align-items-center justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <img src="https://pbs.twimg.com/media/FeTjRv8XgAIyPRp.jpg" class="card-img-top" alt="...">
                    <div class="card-img-overlay">
                        <h2 class="display-6">RED SOCIAL USTAGRAM</h2>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore sed voluptates ea quod dicta nesciunt, maiores 
                            animi consequuntur error perferendis? Iste dolore itaque commodi, iure vel consequatur suscipit magnam maiores.
                        </p>
                        <a type="button" href="{{route("registrarse")}}" class="btn btn-primary">REGISTRARSE</a>
                        <a type="button" href="{{route("login")}}" class="btn btn-success">INICIAR SESION</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection