<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>{{ config('app.name', 'Easy Tools') }}</title>

    	<!-- CSRF Token -->
    	<meta name="csrf-token" content="{{ csrf_token() }}">
    	
    	<!-- Styles -->
    	{{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    	<link href="{{ asset('css/slick.min.css') }}" rel="stylesheet" >
    	<link href="{{ asset('css/index.css') }}"  rel="stylesheet" >
		<link href="{{ asset('css/fontawesome.min.css') }}" rel="stylesheet">

		<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->		
		<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700,900" rel="stylesheet"> -->
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">	
	</head>
	<body>
		<main>
			<aside class="aside">
				<nav class="menu">
					<ul>
						<li class="first">
							<a href="index.html">
								<h1 class="logo">
									<img src="">
									<span class="">Easy Tools</span>
								</h1>
							</a>
						</li>
						<li><a href="{{ route('home') }}">Dashboard</a></li>
						<li><a href="{{ route('projects') }}">Projetos</a></li>
						<li><a href="{{ route('tasks') }}">Tarefas</a></li>
						<li><a href="{{ route('users') }}">Pessoas</a></li>
						<li><a href="{{ route('financials') }}">Financeiro</a></li>
{{-- 						<li class="has-sub">
							<a href="#">Relatórios</a>
							<ul class="list">
								<li><a href="">Projeto</a></li>
								<li><a href="">Tempo por Projeto</a></li>
								<li><a href="">Tempo por Tarefa</a></li>
							</ul>
						</li>	 --}}					
					</ul>
				</nav>						
			</aside>	
			<div class="content-right">	
			 	@yield('content')
			 </div>
			</main>
		<footer>
			
		</footer>
	</body>
	<script src="{{ asset('js/jquery.min.js') }}"></script>	
	<script src="{{ asset('js/index.js') }}"></script>		
	<script src="{{ asset('js/slick.min.js') }}"></script>	
</html>