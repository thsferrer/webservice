<?php
require_once "cabec.php";
	if($_POST)
	{		
		$cep = urlencode($_POST["cep"]);
		$ret = file_get_contents("http://localhost/SOA/trabalhophpfinal/servidorcliente.php?oper=inserir&cep=$cep");
		
		if($ret == 0)
			echo "<script>alert('Cadastro realizado com sucesso!')</script>";
		else
			echo "<script>alert('Problema ao cadastrar CEP!')</script>";
	}
?>
<!doctype html>
<html>
<head>
	<title>Cadastro CEP</title>
</head>
<body>	
	<form method="POST" action="#">
	  
	   <h1>Cadastro de CEP</h1>
		<p>
			<label>Digite o CEP:</label>
			<input type="text" name="cep" />
		</p>
		<p>
			<input type="submit" value="Salvar" /> 
		</p>
		</form>	
</body>
</html>