@extends('trabajadores.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Trabajador</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('trabajadores.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <?php echo $trabajador ?>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>responsable:</strong>
                {{$trabajador->responsable}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Puesto</strong>
                {{ $trabajador->puesto }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Departamento</strong>
                {{ $trabajador->departamento }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>tipo de contrato:</strong>
                {{ $trabajador->tipoDeContrato }}
            </div>
        </div>
    </div>
@endsection
