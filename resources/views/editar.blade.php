@extends('layout')

@section('content')
<h1>Editar registro</h1>
<form method="POST" action="{{ route('actualizar', $activo)}}">
	@csrf @method('PATCH')
	<p>Num. Inventario:
		<input type="text" name="numInventario" value="{{$activo->numInventario}}"></p>
		<p>Tipo: <select name="tipo">
			<option>{{$activo->tipo}}</option>
			<option >Terrenos</option>
			<option >Edificios Administrativos</option>
			<option >Equipo de Cómputo y de Tecnologías de la Información </option>
			<option >Vehículos y Equipo Terrestre</option>
			<option >Muebles de Oficina y Estantería</option>
			<option >Otros Mobiliarios y Equipos de Administración</option>
			<option >Cámaras Fotográficas y de Video</option>
		</select></p>
		<p>Descripcion:
			<textarea name="descripcion" >{{$activo->descripcion}}</textarea>
		</p>
		<p>Num. de Serie
			<input type="text" name="numSerie" value="{{$activo->numSerie}}"></p>
			<p>Resguardo
				<select name="resguardo">
					<option>{{$activo->resguardo}}</option>
					<option >Presidencia</option>
					<option >Contabilidad </option>
					<option >Comunicación Social </option>
					<option >Recepción</option>
					<option >Coord. Jurídica</option>
					<option >Trabajo Social</option>
					<option >Psicología</option>
					<option >Alimentación</option>
					<option >Dirección General</option>
					<option >INAPAM</option>
					<option >PANNAR</option>
					<option >Cocina</option>
				</select>
			</p>
			<p>Valor de Adquisición
				<input type="number" name="valorAdquisitivo" value="{{$activo->valorAdqui}}" min="0">
			</p>

			<p>Verificado
				@if($activo->verificado === 1)
				<input type="radio" name="verificado" value="1" checked="true">Si
				<input type="radio" name="verificado" value="0">No
				@else
				<input type="radio" name="verificado" value="1">Si
				<input type="radio" name="verificado" value="0" checked="true">No
				@endif
			</p>
			<p>Numero de trabajador <input type="number" name="id_trabajador" value="{{$activo->id_trabajador}}" min="0"></p>

			<button>Actualizar</button>
		</form>
		@endsection
