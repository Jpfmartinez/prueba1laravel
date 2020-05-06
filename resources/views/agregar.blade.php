@extends('layout')

@section('content')
<h1>AGREGAR</h1>{{ 'addActivo' }}
<form method="POST" action="">
	@csrf
	<p>Num. Inventario:
		<input type="text" name="numInventario"></p>
		<p>Tipo: <select name="tipo">
			<option value="Terrenos">Terrenos</option>
			<option value="Edificios Administrativos" selected>Edificios Administrativos</option>
			<option value="Equipo de Cómputo y de Tecnologías de la Información">Equipo de Cómputo y de Tecnologías de la Información </option>
			<option value="Vehículos y Equipo Terrestre">Vehículos y Equipo Terrestre</option>
			<option value="Muebles de Oficina y Estantería">Muebles de Oficina y Estantería</option>
			<option value="Otros Mobiliarios y Equipos de Administración">Otros Mobiliarios y Equipos de Administración</option>
			<option value="Cámaras Fotográficas y de Video">Cámaras Fotográficas y de Video</option>
		</select></p>
		<p>Descripcion:
			<textarea name="descripcion"></textarea>
		</p>
		<p>Num. de Serie
			<input type="text" name="numSerie"></p>
			<p>Resguardo
				<select name="resguardo">
					<option value="value1" selected>Presidencia</option>
					<option value="value2">Contabilidad </option>
					<option value="value3">Comunicación Social </option>
					<option value="value4">Recepción</option>
					<option value="value5">Coord. Jurídica</option>
					<option value="value6">Trabajo Social</option>
					<option value="value7">Psicología</option>
					<option value="value8">Alimentación</option>
					<option value="value9">Dirección General</option>
					<option value="value10">INAPAM</option>
					<option value="value11">PANNAR</option>
					<option value="value12">Cocina</option>
				</select>
			</p>
			<p>Valor de Adquisición
				<input type="number" name="valorAdquisitivo">
			</p>

			<p>Verificado
				<input type="radio" name="verificado" value="0">Si
				<input type="radio" name="verificado" value="1">No
			</p>
			<p>Numero de trabajador <input type="number" name="numTrabajador"></p>

			<button>Añadir activo</button>
		</form>
		@endsection