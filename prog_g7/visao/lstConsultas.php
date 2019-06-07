<?php 
	session_start();
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	if($_SESSION['logado']!=1){
		header("Location: ../../../prog_g1/desenv/index.php");
	}
 ?>
<?php 
	include_once $_SERVER['DOCUMENT_ROOT']."/prog_g7/desenv/controle/ControleConsulta.class.php";
	//$pacientes = $conexao->consulta("SELECT id_usuario, nomeP FROM paciente");

	$cConsulta = new ControleConsulta();

	$consultas = $cConsulta->listarRealizados($_SESSION['usuario']);
	$consultas1 = $cConsulta->listarFilas($_SESSION['usuario']);
	
?>
<html>
	<head>
		<title>Listar Consulta</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="https://commons.wikivet.net/images/4/49/Dog-logo.png">
		<link rel="stylesheet" href="../assets/core.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</head>
	<body>
			<script>
		function alertaSair() {
		confirma = confirm("Tem certeza que deseja sair?");
		    if (confirma) {
		        return true;
		    } else {
		        return false;
		    }
		}
		</script>
			
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<a class="navbar-brand" href="#">
					<img src="https://commons.wikivet.net/images/4/49/Dog-logo.png" width="30" height="30" class="d-inline-block align-top" alt="BillyVet">
					BillyVet
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="nav navbar-nav mr-auto">
					<?php if($_SESSION['tipo'] == 1){  ?>
					 <li class="nav-item active">
							<a class="nav-link dropdown-toggle" href="#"  id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuários   </a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="../../../prog_g5/desenv/visao/FormularioUsuario.php">Novo Atendente</a>
								<a class="dropdown-item" href="../../../prog_g5/desenv/visao/lstAtendente.php">Listar Atendentes</a>
							</div>
						</li>
					 <?php }  ?>
					 
					 <?php if($_SESSION['tipo'] == 2){  ?>
					 <li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Agendamentos
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="../../../prog_g4/desenv/visao/cadAgendamento.php">Novo</a>
								<a class="dropdown-item" href="../../../prog_g4/desenv/visao/lstAgendamentos.php">Listar</a>
								
							</div>
						</li>
						<li class="nav-item dropdown active">
							
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Pacientes
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="../../../prog_g3/desenv/visao/cadPaciente.php">Novo</a>
								<a class="dropdown-item" href="../../../prog_g3/desenv/visao/lstPaciente.php">Listar</a>
								
							</div>
						</li>
						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Consultas
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="../../../prog_g7/desenv/visao/cadConsulta.php">Novo</a>
								<a class="dropdown-item" href="../../../prog_g7/desenv/visao/lstAtendente.php">Listar</a>
								
							</div>
						</li>
						<li class="nav-item dropdown active">
						
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Internações
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="../../../prog_g6/desenv/visao/cadInter.php">Novo</a>
								<a class="dropdown-item" href="../../../prog_g6/desenv/internacao.php">Listar</a>
								
							</div>
			
						</li>
						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Usuários
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="../../../prog_g2/desenv/visao/listarVet.php">Listar Veterinários</a>
								
								
							</div>
						</li>
					
					
					 <?php }  ?>
					 
					 <?php if($_SESSION['tipo'] == 3){  ?>
						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Consultas
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="../../../prog_g1/desenv/visao/lstConsulta.php"> Listar </a>
								
								
							</div>
						</li>
						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Internações
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> <!--grupo1 -->
								<a class="dropdown-item" href="../../../prog_g1/desenv/visao/lstInternacoes.php"> Listar </a>
								
								
							</div>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="../../../prog_g1/desenv/visao/lstPaciente.php" id="navbarDropdownMenuLink" >
								Paciente
							</a>
						</li>
			
					 <?php }  ?>
					  <?php if($_SESSION['tipo'] == 4){  ?>
						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Consultas
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="../../../prog_g7/desenv/visao/lstConsultas.php">Listar</a>
								
								
							</div>
					 <?php }  ?>
					 
					 </ul>
					 <ul class="nav navbar-nav">
						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<?php echo $_SESSION['nome'];?>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="../../../prog_g1/desenv/visao/alterarSenha.php">Trocar senha</a>
								<a class="dropdown-item" href="../../../prog_g1/desenv/visao/logOut.php" &acao="sair" onclick="return alertaSair();" >Sair</a>
								
								
							</div>
						</li>
					
						
					</ul>

				</div>
			</nav>
		<div class="container-fluid">
			<div class="row">
				<h1>Listar Consultas</h1>
			</div>
			<nav>
				<!-- abas - no href coloca-se o id da div que ira abrir quano vc clicar na aba -->
			  <div class="nav nav-tabs" id="nav-tab" role="tablist">
			    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true" href='lstConsultas.php?status=1'>Consultas à realizar</a>
			    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false" href='lstConsultas.php?status=2'>Consultas Realizadas</a>
			  </div>
			</nav>
			<!-- conteudo das abas - lembrar de coloca o id igual como la em cima. Ex: nav-home -->
			<div class="tab-content" id="nav-tabContent">
			  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
			  	<table class="table table-hover">
			  	  <thead>
			  	    <tr class="thead-light">
			  	      <th scope="col">Data e Hora</th>	
			  	      <th scope="col">Nome do Paciente | Tutor</th>
			  	      <th scope="col">Opções</th>
			  	    </tr>
			  	  </thead>
			  	  <tbody>	 	    
			  	    	<?php
			  	    		if(!empty($consultas1)){
			  	    			foreach ($consultas1 as $consulta1) {
			  	    				echo "<tr class='thead-light clickable-r'>";
			  	    				$diaehora = $consulta1->getHorarioConsulta();
			  	    				$date = date('d/m/Y',strtotime($diaehora));
			  	    				$time = date('H:i:s',strtotime($diaehora));
			  	    				echo "<td>".$date." ".$time."</td>";
			  	    				echo "<td class='linha'>".utf8_encode($consulta1->getNome_paciente())."</td>";
			  	    				echo "<td><a class='btn btn-primary' href='rlzConsulta.php?consulta=".$consulta1->getId_consulta()."'>Realizar</a></td>";
			  	    				echo "</tr>";
			  	    			}
			  	    		}
			  	    	?>
			  	  </tbody>
			  	</table>
			  </div>
			  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
			  	<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
			  		<table class="table table-hover">
			  		  <thead>
			  		    <tr class="thead-light">
			  		      <th scope="col">Data e Hora</th>
			  		      <th scope="col">Nome do Paciente | Tutor</th>
			  		      <th scope="col">Opções</th>
			  		    </tr>
			  		  </thead>
			  		  <tbody>
			  	    	<?php
			  	    		if(!empty($consultas)){
			  	    			foreach ($consultas as $consulta) {
			  	    				echo "<tr class='thead-light clickable-s'>";
			  	    				$diaehora = $consulta->getHorarioConsulta();
			  	    				$date = date('d/m/Y',strtotime($diaehora));
			  	    				$time = date('H:i:s',strtotime($diaehora));
			  	    				echo "<td>".$date." ".$time."</td>";
			  	    				echo "<td class='linha'> <a href='visuHistorico.php?paciente=".$consulta->getId_usuario()."'>".utf8_encode($consulta->getNome_paciente())."</a></td>";
			  	    				echo "<td><a href='visuConsulta.php?consulta=".$consulta->getId_consulta()."'><img width='25px' height='25px' src='../../../prog_img/verum.png'></a></td>";
			  	    				echo "</tr>";
			  	    			}
			  	    		}

			  	    	?>
			  		  </tbody>
			  		</table>
			  	</div>
			  </div>
			</div>
		</div>
	</body>
</html>