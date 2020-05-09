@extends('trabajadores.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Dif Project</h2>
            </div>
            <div class="pull-right">
               <a class="btn btn-success" href="{{ route('trabajadores.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>responsable</th>
            <th>puesto</th>
            <th>departamento</th>
            <th>tipo de contrato</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($trabajadores as $trabajador)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{$trabajador -> responsable}}</td>
            <td>{{$trabajador -> puesto}}</td>
            <td>{{$trabajador -> departamento}}</td>
            <td>{{$trabajador -> tipoDeContrato}}</td>
            <td>
              <form action="{{ route('trabajadores.destroy',$trabajador->id) }}" method="POST">

                  <a class="btn btn-info" href="{{ route('trabajadores.show',$trabajador->id) }}">Show</a>

                  <a class="btn btn-primary" href="{{ route('trabajadores.edit',$trabajador->id) }}">Edit</a>

                  @csrf
                  @method('DELETE')

                  <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </td>
        </tr>
        @endforeach
    </table>

{!! $trabajadores->links() !!}

@endsection
