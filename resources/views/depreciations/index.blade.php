@extends('depreciations.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>depreciaciones</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('depreciations.create') }}"> Create New Product</a>
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
            <th>Numuero de inventario</th>
            <th>tipo</th>
            <th>descripcion</th>
            <th>monto original</th>
            <th>vida util</th>
            <th>porcenjate</th>
            <th>total</th>
            <th>por depreciar</th>
            <th>depreciacion acumulada</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($depreciations as $depreciation)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $depreciation->noInventario }}</td>
            <td>{{ $depreciation->tipo }}</td>
            <td>{{ $depreciation->descripcion }}</td>
            <td>{{ $depreciation->montoOriginal }}</td>
            <td>{{ $depreciation->vidaUtil }}</td>
            <td>{{ $depreciation->porcenjate }}</td>
            <td>{{ $depreciation->total }}</td>
            <td>{{ $depreciation->porDepreciar }}</td>
            <td>{{ $depreciation->depreciacionAc}}</td>
            <td>
                <form action="{{ route('depreciations.destroy',$depreciation->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('depreciations.show',$depreciation->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('depreciations.edit',$depreciation->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $depreciations->links() !!}

@endsection
