@extends('layout')

@section('content')
<h1>Bitacora</h1>
<style>
table {
font-family: arial, sans-serif;
border-collapse: collapse;
width: 100%;
}

td, th {
border: 1px solid #dddddd;
text-align: left;
padding: 8px;
}

tr:nth-child(even) {
background-color: #dddddd;
}
</style>
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
			<th>Fecha de baja</th>
		</tr>
	</thead>
	<tbody>
		@foreach($activoBi as $activos)
		<tr>

			<td>{{$loop->iteration}}</td>
			<td>{{ $activos->numInventario_bi }}</td>
			<td>{{ $activos->tipo_bi }}</td>
			<td>{{ $activos->descripcion_bi }}</td>
			<td>{{ $activos->numSerie_bi }}</td>
			<td>{{ $activos->resguardo_bi }}</td>
			<td>${{ $activos->valorAdqui_bi }}</td>
			<td>
				@if( $activos->verificado_bi ===1 )
					SI
				@else
					NO
				@endif
			</td>
			<td>{{ $activos->numTrabajador_bi }}</td>
			<td>
				{{$activos->created_at}}
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

@endsection
