<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login | Controle de Patrimônio</title>
		<link rel="stylesheet" href="{{ asset("css/stylesheet.css") }}">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
	</head>
	<body>

		<div class="background"></div>

		<section id="conteudo-view" class="login">

			<h1>Unimed</h1>
			<h3>Controle de Patrimônio</h3>

			{!! Form::open(['route'=>'user.login','method'=>'post']) !!}
			<p>Login</p>

			<label>
				{!! Form::text('username', null, ['class' => 'input', 'placeholder'=>'Usuário']) !!}
			</label>

			<label>
				{!! Form::password('password', ['placeholder'=>'Senha']) !!}
			</label>

			{!! Form::submit('Entrar')!!}

			{!! Form::close() !!}

		</section>

	</body>
</html>