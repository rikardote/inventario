{!! Form::open(['route' => ['ip.store', $ip], 'method' => 'POST']) !!}
			@include('ip.form')
			{!! Form::submit('Registrar', ['class' => 'btn btn-success']) !!}
{!! Form::close() !!}