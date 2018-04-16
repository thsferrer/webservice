<?php
	require_once "modelo/conexao.class.php";
	require_once "modelo/clienteDAO.class.php";
	require_once "modelo/cepDAO.class.php";
	class cliente
	{
		function buscar()
		{
			$cliDAO = new clienteDAO();
			$ret = $cliDAO->buscarcli();
			return json_encode($ret);
		}
		function inserir($cep)
		{
			$cliDAO = new cepDAO();
			$ret = $cliDAO->inserir($cep);
			return $ret;
		}
	}
		if(isset($_GET["oper"]))
		{
			$cliente = new cliente();
			if($_GET["oper"]=="buscar")
			{
				$ret = (string)$cliente->buscar();
			}
			else if($_GET["oper"] == "inserir")
			{
				$ret = (string)$cliente->inserir($_GET['cep']);
			}
			exit ($ret);
		}
?>