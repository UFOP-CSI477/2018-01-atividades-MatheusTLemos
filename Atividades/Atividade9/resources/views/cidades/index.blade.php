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
	<div class="row jumbotron">
		<h1>cidades</h1>
	</div>	
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Estado</th>
        <th colspan="2">Opções</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($cidades as $cidade)
      <tr>
        <td>{{$cidade['id']}}</td>
        <td>{{$cidade['nome']}}</td>
        <td>{{$cidade['estado_id']}}</td>
        
        <td><a href="{{action('CidadesController@edit', $cidade['id'])}}" class="btn btn-warning">Editar</a></td>
        <td>
          <form action="{{action('CidadesController@destroy', $cidade['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Deletar</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <a href="{{ url('/cidades/create') }}">
    <button class="btn">Nova cidade</button>
  </a>
  </div>
</body>
</html>