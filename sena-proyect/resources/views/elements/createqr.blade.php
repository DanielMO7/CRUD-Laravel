@extends('layouts.app')
<!-- Pára enviar la informacion debidamente al formulario, usaremos la ruta que nos especifica el
comando php artisan route:list
    - {{ url('/elements') }} Permite ingresar al controlador, al metodo destinado para el POST
-->
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                @if( Session::has('message'))
                     <div class="d-grid gap-2">
                        <button class="btn btn-success" type="button">{{ Session::get('message') }}</button>
                    </div>
                    <br/>
                @endif
                @if (count($errors)>0)
                    <div class="d-grid gap-2">
                        <ul>
                            @foreach($errors->all() as $error)
                                <button class="btn btn-danger aling-center" type="button"><li> {{ $error }}</li></button>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <form action="{{ url('/qrs') }}" method="post" >
<!--Imprime la llave de seguridad para que laravel responda correctamente al formulario-->
@csrf
                        <div class="mb-3">
                            <label for="Qr" class="form-label">Codigo de Barras</label>
                            <input type="number" class="form-control" name="Qr" id="Qr">
                        </div>
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
