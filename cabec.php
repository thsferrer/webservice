<!DOCTYPE html>
<html>
	<head>
		
		<link rel='stylesheet' href='css/css.css' type='text/css'/>
	<link rel='stylesheet' href='css/grid.css' type='text/css'/>
		<link href='https://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>

		<title>Busca Rapida</title>
	</head>
	<body>
	<header class="header">
		<div class="teste_header">
			<img src="css/logo.png" alt="Logotipo" title="Logotipo" id="logo"/>
		</div>   	
	</header>
	<div class='menudireita'>
		<div class="menu">
	            	<?php
							echo "<ul>";
							echo "<li><a class='btn' href='pagina.php'>Países e siglas</a></li><br/>";
							echo "<li><a class='btn' href='cep.php'>Buscar CEP</a></li><br/>";
							echo "<li><a class='btn' href='cep-cadastro.php'>Cadastrar um CEP</a></li><br/>";
							echo "<li><a class='btn' href='mostra-clientes.php'>Usuários e seus países</a></li><br/>";
							echo "</ul>";
					?>
	
        </div>
    </nav>