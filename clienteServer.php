<?php
	require_once "modelo/conexao.class.php";
	require_once "modelo/clienteDAO.class.php";
	require_once "lib/nusoap.php";
	// criar o objeto nusoap
	$servico = new nusoap_server();
	// WSDL
	$servico->configureWSDL("ClienteWsdl");
	$servico->wsdl->schemaTargetNamespace = "urn:ClienteWsdl";
	// serviço
	class cliente
	{
		function login($email,$senha)
		{
			$cliDAO = new clienteDAO();
			$ret = $cliDAO->login($email,$senha);
			return json_encode($ret);
		}
		function inserir($nome,$email,$senha,$pais)
		{
			$cDAO = new clienteDAO();
			$ret = $cDAO->inserir($nome,$email,$senha,$pais);
			return $ret;
		}
	}
		// registros das operações
		$servico->register("cliente.login",
						array("email"=>"xsd:string","senha"=>"xsd:string"), // parâmetros de entrada
						array("retorno"=>"xsd:string"), 
						"urn:cliente",
						"urn:cliente#login",
						"rpc",
						"encode",
						"Autenticação do usuário");
		$servico->register("cliente.inserir",
						array("nome"=>"xsd:string","email"=>"xsd:string","senha"=>"xsd:string","pais"=>"xsd:string"),
						array("retorno"=>"xsd:string"), 
						"urn:cliente",
						"urn:cliente#inserir",
						"rpc",
						"encode",
						"Cadastrar usuário");
//pega a requisição
$chamada = file_get_contents("php://input");
//executa a operação requisitada
$servico->service($chamada);
?>