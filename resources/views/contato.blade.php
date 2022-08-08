@extends('layouts.app')
@section('title', 'Contato')
@section('content')

	<h1 class="mb-3">Entre em contato</h1>
	
	@if($message = Session::get('success'))
		<div class="alert alert-success">
			{{$message}}
		</div>
	@endif

	@if(count($errors)>0)
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<form method="POST" action="{{url('contato/enviar')}}">
		@csrf
		<div class="form-group mb-3">
		    <label for="nome">Nome</label>
		    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o seu nome..." required>
	 	</div>
		<div class="form-group mb-3">
		    <label for="email">E-mail</label>
		    <input type="email" class="form-control" id="email" name="email" placeholder="Digite o seu e-mail..." required>
	 	</div>		
		<div class="form-group mb-3">
		    <label for="assunto">Assunto</label>
		    <input type="text" class="form-control" id="assunto" name="assunto" placeholder="Digite o assunto..." required>
	 	</div>
	 	<div class="form-group mb-3">
		    <label for="msg">Mensagem</label>
		   	<textarea class="form-control" id="msg" name="msg" rows="6" placeholder="Digite uma mensagem..." required></textarea>
	 	</div>

	 	<button type="submit" class="btn btn-primary">Enviar Mensagem</button>
	</form>

@endsection