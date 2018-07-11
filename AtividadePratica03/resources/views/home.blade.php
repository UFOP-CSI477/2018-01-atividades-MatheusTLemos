@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="text-center">
					<br>
					<a href="{{ url('/exames') }}"><button class="btn">Exames</button></a>
					<br>
					<a href="{{ url('/procedimentos') }}"><button class="btn">Procedimentos</button></a>
					<br>
					<a href="{{ url('/usuarios') }}"><button class="btn">Usuarios</button></a>
				</div>
            </div>
        </div>
    </div>
</div>
@endsection
