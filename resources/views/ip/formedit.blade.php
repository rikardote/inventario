<div class="form-group">
	{!! Form::label('ip', 'IP') !!}
	
	{!! Form::text('ip', $datos->ip, [
		'class' => 'form-control',
		'readonly'=>'true',
		'required']) 
	!!}
</div>
<div class="form-group">
	{!! Form::label('name', 'Empleado') !!}
	
	{!! Form::text('name', $datos->name, [
		'class' => 'form-control',
		'required']) 
	!!}
</div>
<div class="form-group">
	{!! Form::label('machine_name', 'Nombre del Equipo') !!}
	
	{!! Form::text('machine_name', $datos->machine_name, [
		'class' => 'form-control',
		'required']) 
	!!}
</div>
<div class="form-group">
	{!! Form::label('ubicacion_id', 'Re-ubicar') !!}
	{!! Form::select('ubicacion_id', 
		array('1' => 'Sotano', '2' => 'Bunker', '3' => 'Mantto', '4' => 'PB', '5' => 'Piso 1', '6' => 'Piso 2', '7' => 'Piso 3', '8' => 'Piso 4', '9' => 'Piso 5'), 
		$datos->ubicacion_id, 
		['class' => 'form-control', 'placeholder' => 'Selecciona...']) 
	!!}

</div>

Asignada el: {{date('d/m/Y', strtotime(str_replace('/', '-', $datos->updated_at)))}}