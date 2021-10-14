@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">

            <h1>Sistema De Inventario CDITI - Bodegas y Ambientes Internos.</h1>
            <div class ="col-md-12 pt-5">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam, maiores obcaecati
                voluptatibus aspernatur sunt adipisci ea ipsa facere itaque doloribus architecto tenetur,
                corporis debitis iste vitae aliquid odio quam eveniet.</p>
            </div>
            <div class ="col-md-12 pt-5">
                <!--Utilizamos el formulario de registro para crear un usuario.-->
            <a class="navbar-brand" href="{{ route('register') }}">
                 Crear Usuario
            </a>
            <a class="navbar-brand" href="{{ url('/barcode') }}">
                 Generar Codigo de Barras
            </a>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
