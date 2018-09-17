<!DOCTYPE html>
	<html lang="pt-br">
		<head>
			<meta charset="utf-8">
			<title>Controle de Patrimônio</title>
			<link rel="stylesheet" type="text/css" href={{ asset('css/stylesheet.css') }}>
			<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
			@yield('css-view')
		</head>


		<body>

			@include('templates.menu-lateral')

			<section id="view-conteudo">
				@yield('conteudo-view')
			</section>

			@yield('js-view')

	</html>