<?php
require_once "cabec2.php";
	include "lib/nusoap.php";
	if($_POST)
	{
		$cliente = new nusoap_client("http://localhost/SOA/trabalhophpfinal/clienteServer.php?wsdl"); // chama o controle/servidor
		$parametro = array("email"=>$_POST["email"], "senha"=>$_POST["senha"]); // vetor com os parâmetros
		$ret = $cliente->call("cliente.login", $parametro); // chamando o método e passando os parâmetros
		$ret = json_decode($ret);
		if(count($ret)>0)
		{
			echo "<script>alert('Seja bem-vindo(a), {$ret[0]->nome}!')</script>";
			echo "<script>location.href='pagina.php';</script>";
		}
		else
		{
			echo "<script>alert('e-Mail/senha não conferem!')</script>";
		}
	}
?>

	<article>	
			<form class="contato_form" action="#"  method="POST" id="Autenticar">
				<h2>Identifique-se</h2>
				<input type="hidden" name="id"/>  
				<p>
				<label>e-Mail:</label>
				<input type="text" name="email"/>
				</p>
				<p>
				<label>Senha:</label>
				<input type="password" name="senha"/>			
				</p>
				<p>
				<input type="submit" value="Entrar" name="Entrar"/>
				</p>
			</form>
	 </article>
	</body>
	</html>