@extends('layouts.app')
<!-- Pára enviar la informacion debidamente al formulario, usaremos la ruta que nos especifica el
comando php artisan route:list
    - {{ url('/elements') }} Permite ingresar al controlador, al metodo destinado para el POST
-->
@section('content')

@if( Session::has('message'))

{{ Session::get('message') }}

@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('/elements') }}" method="post" >
<!--Imprime la llave de seguridad para que laravel responda correctamente al formulario-->
@csrf
                        <div class="row">
                            <div class="col">
                                <label for="Name_Element" class="form-label">Nombre del Elemento</label>
                                <input type="text" class="form-control" name="Name_Element" id="Name_Element">
                            </div>
                            <div class="col">
                                <label for="Type_Element" class="form-label">Tipo de Elemento</label>
                                    <select type="text" class="form-control" aria-label="Default select example" name="Type_Element" id="Type_Element">
                                        <option selected></option>
                                        <option value="Devolutivo">Devolutivo</option>
                                        <option value="Consumo">Consumo</option>
                                    </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="Qr" class="form-label">Codigo de Barras</label>
                            <input type="number" class="form-control" name="Qr" id="Qr">
                        </div>
                        <div class="mb-3">
                            <label for="Observations" class="form-label">Observaciones</label>
                            <textarea class="form-control" name="Observations" id="Observations" style="height: 100px"></textarea>
                        </div>
                            <button type="submit" class="btn btn-primary">Crear Elemento</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
