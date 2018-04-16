<?php
require_once "cabec2.php";
	include "lib/nusoap.php";
	if($_POST)
	{
		$cliente = new nusoap_client("http://localhost/SOA/trabalhophpfinal/clienteServer.php?wsdl");
		$parametro = array("nome"=>$_POST["nome"],"email"=>$_POST["email"], "senha"=>$_POST["senha"],"pais"=>$_POST["pais"]);
		$ret = $cliente->call("cliente.inserir", $parametro);
		if(!$ret)
		{
			echo "<script>alert('Cadastro realizado com sucesso!')</script>";
			echo "<script>location.href='index.php';</script>";
		}
		else
		{
			echo "<script>alert('Houve um problema!')</script>";
		}
	}
?>

		<article>	
		<form class="contato_form" action="#"  method="POST" id="Cadastrar">
			<h2>Cadastrar-se</h2>
			<input type="hidden" name="id"/>  
			<p>
			<label>Nome:</label>
			<input type="text" name="nome"/>
			</p>
			<p>
			<label>e-Mail:</label>
			<input type="text" name="email"/>
			</p>
			<p>
			<label>Senha:</label>
			<input type="password" name="senha"/>			
			</p>
			<p>
			<label>País:</label>
			<input type="text" name="pais"/>			
			</p>
			<p>
			<input type="submit" value="Enviar" name="Enviar"/>
			</p>
		</form>
	 </article>
	</body>
	</html>