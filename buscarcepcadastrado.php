<?php
require_once "cabec.php";
require_once "modelo/conexao.class.php";
require_once "modelo/cepDAO.class.php";
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
	<title>Buscar CEP cadastrado</title>
</head>
<body>
	<form action = "#" method="POST">
			
				<h1>Busque um cep já cadastrado:</h1>
				<select name="cep">
				<?php
					$cDAO = new cepDAO();
					$retorno = $cDAO->buscarTodos();
					if(count($retorno > 0))
					{
						foreach($retorno as $dado)
						{
							echo "<option value='{$dado->cep}'>{$dado->cep}</option>";
						}
					}
				?>
				</select><br/>
			
			<input type="submit" value="Enviar" />
		</form>
	</body>
	</html>
