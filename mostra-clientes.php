<?php
require_once "cabec.php";
?>
<!doctype html>
	<html>
	<title>Mostrar clientes</title>
	<h1>Todos os clientes</h1>
	</html>
<?php
	$ret = file_get_contents("http://localhost/SOA/trabalhophpfinal/servidorcliente.php?oper=buscar");
	$ret = json_decode($ret);
	echo "<table border=1>";
	echo "<th>Nome</th><th>País</th>";
	foreach($ret as $dado)
	{
			echo "<tr>";
			echo "<td>$dado->nome</td>";
			echo "<td>$dado->pais</td>";
			echo "</tr>";
	}
	echo "</table>";
?>