<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
	<title></title>
</head>
<body>
	<div class="container">
		<form method="post" action="{{action('CidadesController@update', $id)}}">
			@csrf
			{{ method_field('PUT')}}
			<div class="row jumbotron">
				<h1>Editar cidade</h1>
			</div>
			<div class="row form-group">
				<div class="col-md-8">
					<input type="text" class="form-control" name="nome" value="{{$cidade->nome}}">
				</div>
				<div class="col-md-4">
					<select name="estado" class="form-control">
						@foreach ($estados as $e)
                            <option value="{{ $e->id}}"> {{$e->nome}}</option>
                       	@endforeach
					</select>
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-6">
					<input type="reset" class="btn" name="limpar" value="limpar">
				</div>
				<div class="col-md-6">
					<input type="submit" class="btn btn-primary" name="submit">
				</div>
			</div>
		</form>
	</div>
</body>
</html>