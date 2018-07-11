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
		<h1>Alunos</h1>
	</div>	
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Rua</th>
        <th>Cidade</th>
        <th>Numero</th>
        <th>Bairro</th>
        <th>CEP</th>
        <th colspan="2">Opções</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($alunos as $aluno)
      <tr>
        <td>{{$aluno['id']}}</td>
        <td>{{$aluno['nome']}}</td>
        <td>{{$aluno['rua']}}</td>
        <td>{{$aluno['cidade']}}</td>
        <td>{{$aluno['numero']}}</td>
        <td>{{$aluno['bairro']}}</td>
        <td>{{$aluno['cep']}}</td>
        
        <td><a href="{{action('AlunosController@edit', $aluno['id'])}}" class="btn btn-warning">Editar</a></td>
        <td>
          <form action="{{action('AlunosController@destroy', $aluno['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Deletar</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <a href="{{ url('/alunos/create') }}">
    <button class="btn">Novo Aluno</button>
  </a>
  </div>
</body>
</html>