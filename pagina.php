<?php
require_once "cabec.php";
?>
<?php
echo "<title>Paises e siglas</title>";
	// obj soapClient(passar a url do serviço que vai acessar);
	$cliente = new soapClient("http://api.radioreference.com/soap2/?wsdl&v=latest");
	// pegar o retorno do obj e chamando um método que está dentro do link
	$retorno = $cliente->getCountryList();
			echo "<h1>Lista de países e suas siglas</h1>";
			echo "<br/>";
			echo "<table border=1>";
			echo "<th>País</th><th>Sigla</th>";
			foreach($retorno as $dado)
			{
				echo "<tr>";
				echo "<td>$dado->countryName</td>";
				echo "<td>$dado->countryCode</td>";
				echo "</tr>";
			}
			echo "</table>";

?>