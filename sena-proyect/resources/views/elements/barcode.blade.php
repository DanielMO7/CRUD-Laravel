@extends('layouts.app')

@section('content')

@if( Session::has('message'))

{{ Session::get('message') }}

@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('/barcode/update') }}" method="post" >
<!--Imprime la llave de seguridad para que laravel responda correctamente al formulario-->
@csrf
{{ method_field('GET') }}
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
@if( $code == 1 )
<div class="container text-center" style="margin-top: 50px;">
    <h3 class="mb-5">Codigo Generado.</h3>

    <div>{!! DNS1D::getBarcodeSVG( $code , 'C39',3,100) !!}</div></br>
</div>
<div class="container text-center" style="margin-top: 50px;">
<input type="button" class="btn btn-primary mb-5" name="imprimir" value="Imprimir" onclick="window.print();">
</div>
@else
<div class="container text-center" style="margin-top: 50px;">
    <h3 class="mb-5">Codigo Generado.</h3>
    <div>{!! DNS1D::getBarcodeSVG( $code['Qr'] , 'C39',3,100) !!}</div></br>
</div>
<div class="container text-center" style="margin-top: 50px;">
<input type="button" class="btn btn-primary mb-5" name="imprimir" value="Imprimir" onclick="window.print();">
</div>
@endif
@endsection
