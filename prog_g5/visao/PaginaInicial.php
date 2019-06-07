 <?php

error_reporting(E_ALL);
ini_set('display_errors',1);


if(isset($_POST['botao']) && $_POST['botao']=="cadastrar"){
	include_once $_SERVER['DOCUMENT_ROOT']."/prog_g5/desenv/controle/ControleAtendente.php";
	$cControle = new ControleAtendente();
	$cControle -> inserir($_POST);
}
?>

<html>
	<head>
		<title>Cabeçalho</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</head>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#">
			<img src="logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="BillyVet">
			BillyVet
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="nav navbar-nav mr-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Agendamentos
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="#">Novo</a>
						<a class="dropdown-item" href="#">Buscar</a>
					</div>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="#">Pacientes</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Consultas</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Internações</a>
				</li>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="nav navbar-nav mr-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Usuários
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="lstAtendente.php">Atendentes</a>
					</div>
			</ul>
			<ul class="nav navbar-nav">
				<!-- alinhado à direita -->
				<li class="nav-item">
					<a class="nav-link" href="#">
						<ins>Ana Paula</ins>
					</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0 ml-lg-3">
				<input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
				<button class="btn btn-primary my-2 my-sm-0" type="submit">Pesquisar</button>
			</form>
		</div>
	</nav>
	<div class="container-fluid">

	</div>
</html>
