{!! Form::open(['route' => ['ip.update', $datos->id], 'method' => 'PATCH']) !!}
			@include('ip.formedit')
			{!! Form::submit('Actualizar', ['class' => 'btn btn-success']) !!}
<a href="{{ route('admin.ip.destroy', $datos->id) }}" class="btn btn-danger">Liberar</a>
{!! Form::close() !!}
