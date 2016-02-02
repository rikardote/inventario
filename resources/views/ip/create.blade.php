{!! Form::open(['route' => ['ip.store', $ip], 'method' => 'POST']) !!}
			@include('ip.form')
			<div align="right">
				{!! Form::submit('Registrar', ['class' => 'btn btn-success']) !!}
			</div>
{!! Form::close() !!}