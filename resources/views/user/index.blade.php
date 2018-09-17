@extends('templates.master')

@section('css-view')
@endsection

@section('js-view')
@endsection

@section('conteudo-view')

	@if (session('success'))

		<h3> {{ session('success')['message'] }}</h3>

	@else

		<h3> Não houve retorno </h3>
		
	@endif

	<h3>Cadastro de novo usuário</h3>

	{!! Form::open(['route' => 'user.store', 'method' => 'post', 'class' => 'form-padrao']) !!}

		@include('templates.formulario.input', ['label' => 'NOME', 'input' => 'name', 'attributes' => ['placeholder' => "NOME"]])

		@include('templates.formulario.input', ['label' => 'TELEFONE', 'input' => 'phone', 'attributes' => ['placeholder' => "TELEFONE"]])

		@include('templates.formulario.input', ['label' => 'E-MAIL', 'input' => 'email', 'attributes' => ['placeholder' => "E-MAIL"]])

		@include('templates.formulario.password', ['label' => 'SENHA', 'input' => 'password', 'attributes' => ['placeholder' => "SENHA"]])

		@include('templates.formulario.submit', ['input' => 'Cadastrar'])

	{!! Form::close() !!}

@endsection