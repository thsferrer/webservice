<?php
require_once "cabec.php";
if($_POST)
{
	$cep = ($_POST["cep"]);
	$resultado = file_get_contents("http://cep.republicavirtual.com.br/web_cep.php?cep=$cep&formato=json");  //rest
	$resultado = json_decode($resultado, true);
		echo "Cidade: {$resultado['cidade']} <br />";
		echo "Estado: {$resultado['uf']} <br />";
		echo "Logradouro: {$resultado['logradouro']} <br />";
		echo "Bairro: {$resultado['bairro']} <br /><br />";
}
?>
<!doctype html>
<html>
<head>
	<title>CEP</title>
</head>
<body>
	<form method="POST" action="#">
	  
	   <h1>Procurar CEP</h1>
		<p>
			<label>Digite o CEP:</label>
			<input type="text" name="cep" />
		</p>
		<p>
			<input type="submit" value="Enviar" /> 
		</p>
		</form>
		<a href="buscarcepcadastrado.php"> Clique aqui para buscar um CEP já cadastrado </a>
	</body>
	</html>
