<?php
	class clienteDAO extends conexao
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function login($email,$senha)
		{
			$sql = "SELECT * FROM cliente WHERE email = ? AND senha = ?";
			try
			{
				$stmt = $this->db->prepare($sql);
				$stmt->bindValue(1, $email);
				$stmt->bindValue(2, $senha);
				$stmt->execute();			
				$this->db = null;
				$ret = $stmt->fetchAll(PDO::FETCH_OBJ);
			
					return $ret;
	
			}
			catch (PDOException $e)
			{
				die ($e->getMessage());
			}
		}

		public function inserir($nome,$email,$senha,$pais)
		{
			$sql = "INSERT INTO cliente(nome, email, senha, pais) VALUES(?,?,?,?)";			
			try
			{
				$stmt = $this->db->prepare($sql);
				$stmt->bindValue(1, $nome);
				$stmt->bindValue(2, $email);
				$stmt->bindValue(3, $senha);
				$stmt->bindValue(4, $pais);
				$ret = $stmt->execute();
				$this->db = null;
				if(!$ret)
				{
					die("Erro ao Inserir Usuário");
				}
				
			}
			catch (PDOException $e)
			{
				die ($e->getMessage());
			}
		}
		public function buscarcli()
		{
			$sql = "SELECT nome, pais FROM cliente";
			try
			{
				$stmt = $this->db->prepare($sql);
				$stmt->execute();
				$resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
				$this->db = null;
				return $resultado;
			}
			catch (PDOException $e)
			{
				die( $e->getMessage());
			}
		}
	}//classe
?>