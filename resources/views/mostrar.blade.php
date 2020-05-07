@extends('layout')

@section('content')
<h1>MOSTAR</h1>
<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>No de Inventario</th>
			<th>Tipo</th>
			<th>Descripcion</th>
			<th>No de Serie</th>
			<th>Resguardo</th>
			<th>Valor de adquisicion</th>
			<th>Verificado</th>
			<th>No de Trabajador</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach($activo as $activos)
		<tr>

			<td>{{$loop->iteration}}</td>
			<td>{{ $activos->numInventario }}</td>
			<td>{{ $activos->tipo }}</td>
			<td>{{ $activos->descripcion }}</td>
			<td>{{ $activos->numSerie }}</td>
			<td>{{ $activos->resguardo }}</td>
			<td>${{ $activos->valorAdqui }}</td>
			<td>
				@if( $activos->verificado ===1 )
					SI
				@else
					NO
				@endif
			</td>
			<td>{{ $activos->numTrabajador }}</td>
			<td>

{{-- 		   	<a href="{{route('show',$activos)}}"><input type="button" value="ver"></a> --}}
			<a href="{{route('editar',$activos)}}"><input type="button" value="editar"></a>

			 <form method="POST" action="{{route('borrar',$activos)}}">
 			  @csrf @method('DELETE')
 			 <button>eliminar</button>
 			</form>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

@endsection
