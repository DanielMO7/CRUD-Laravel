@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row ">
        <div class="col-md-8">
            <div class="card-body">
            @if (Session::has('message'))
                <div class="d-grid gap-2">
                    <button class="btn btn-success" type="button">{{ Session::get('message') }}</button>
                </div>
                <br/>
            @endif

                <div class="mb-3">
                    {{ Form::open([ 'route(search)', 'method' => 'GET', 'class' => 'col' ]) }}
                        <label class="form-label">Buscar Elemento</label>
                            {{ Form::text('Qr', null, [ 'class' => 'form-control', 'placeholder' => 'Codigo']) }}
                    <br>
                        <button type="submit" class="btn btn-primary"> Buscar </button>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>Item </th>
                        <th>Codigo</th>
                        <th>Descripcion</th>
                        <th>Cantidad</th>
                     </tr>
                </thead>
                <tbody>
                    @foreach ($elements as $element)
                        <tr>
                            <td>{{ $element-> Name_Element }}</td>
                            <td>{{ $element-> Qr }}</td>
                            <td>{{ $element-> Observations }}</td>
                            <td>{{ $element-> Type_Element }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $elements->links() !!}
        </div>
    </div>
</div>
@endsection
