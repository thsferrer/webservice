<?php
	abstract class conexao {
		protected $db;
		
		protected function __construct()
		{
			//qual banco ser� utilizado=mysql
			//nome do servidor onde est� o banco de dados = localhost
			$par="mysql:host=localhost;dbname=trabalhosoa";
			try
			{
				$this->db = new PDO($par, "root", "");
			}
			catch ( Exception $e )
			{
				die ($e->getMessage());
			}
		}//m�todo construtor
	}//classe
?>