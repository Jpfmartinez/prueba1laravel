@extends('layout')

@section('content')
<h1>Editar registro</h1>
<form method="POST" action="{{ route('addActivo' )}}">
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
					<option value="Presidencia" selected>Presidencia</option>
					<option value="Contabilidad">Contabilidad </option>
					<option value="Comunicación Social">Comunicación Social </option>
					<option value="Recepción">Recepción</option>
					<option value="Coord. Jurídica">Coord. Jurídica</option>
					<option value="Trabajo Social">Trabajo Social</option>
					<option value="Psicología">Psicología</option>
					<option value="Alimentación">Alimentación</option>
					<option value="Dirección General">Dirección General</option>
					<option value="INAPAM">INAPAM</option>
					<option value="PANNAR">PANNAR</option>
					<option value="Cocina">Cocina</option>
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
