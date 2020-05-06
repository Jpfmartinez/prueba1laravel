@extends('layout')

@section('content')
<h1>AGREGAR</h1>
<form method="POST" action="{{ route('addActivo' )}}">
	@csrf
	<p>Num. Inventario:
		<input type="text" name="numInventario"></p>
		<p>Tipo: <select name="tipo">
			<option >Terrenos</option>
			<option selected>Edificios Administrativos</option>
			<option >Equipo de Cómputo y de Tecnologías de la Información </option>
			<option  >Vehículos y Equipo Terrestre</option>
			<option >Muebles de Oficina y Estantería</option>
			<option >Otros Mobiliarios y Equipos de Administración</option>
			<option >Cámaras Fotográficas y de Video</option>
		</select></p>
		<p>Descripcion:
			<textarea name="descripcion"></textarea>
		</p>
		<p>Num. de Serie
			<input type="text" name="numSerie"></p>
			<p>Resguardo
				<select name="resguardo">
					<option selected>Presidencia</option>
					<option >Contabilidad </option>
					<option >Comunicación Social </option>
					<option >Recepción</option>
					<option >Coord. Jurídica</option>
					<option >Trabajo Social</option>
					<option >Psicología</option>
					<option >Alimentación</option>
					<option >Dirección General</option>
					<option>INAPAM</option>
					<option>PANNAR</option>
					<option>Cocina</option>
				</select>
			</p>
			<p>Valor de Adquisición
				<input type="number" name="valorAdquisitivo">
			</p>

			<p>Verificado
				<input type="radio" name="verificado" value="1">Si
				<input type="radio" name="verificado" value="0">No
			</p>
			<p>Numero de trabajador <input type="number" name="numTrabajador" value=""></p>

			<button>Añadir activo</button>
		</form>
		@endsection
