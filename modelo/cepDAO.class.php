<?php
	class cepDAO extends conexao
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function inserir($cep)
		{
			$sql = "INSERT INTO cep (cep) VALUES (?)";
			try
			{
				$stmt = $this->db->prepare($sql);
				$stmt->bindValue(1, $cep);
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
		public function buscarTodos()
		{
			$sql = "SELECT cep FROM cep";
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