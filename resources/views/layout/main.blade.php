<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>Inventario de IP's</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
</head>

<body style="background:#E2FFED">


	<header>
	    <div class="container">
	        <h1>INVENTARIO DE IP'S</h1>
	        <p>Elaborado Por: Ricardo Fuentes</p>


	    </div>


	</header>

	<div class="container">
	    <div class="row">
	        <div class="col-xl-12">
	            <article>
					@yield('content')
	            </article>
	        </div>
	    </div>
	</div>


	<footer>
	    <div class="container">
	        &copy;  {{date('Y')}} ISSSTE BAJA CALIFORNIA
	    </div>
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>