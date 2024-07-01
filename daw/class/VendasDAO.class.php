<?php
	include_once "Vendas.class.php";
	class VendasDAO{
		public function __construct(){
			$this->conexao = 
			new PDO("mysql:host=localhost; dbname=ecommerceeverton", 
			"root", "");
		}
		
		public function inserir(Vendas $venda){
			$sql= $this->conexao->prepare(
			"INSERT INTO vendas (id_usuario, pagamento, entrega, status, data) VALUES 
			(:id_usuario, :pagamento, :entrega, :status, :data)");
			$sql->bindValue(":id_usuario", $venda->getId_usuario());
			$sql->bindValue(":pagamento", $venda->getPagamento());
			$sql->bindValue(":entrega", $venda->getEntrega());
			$sql->bindValue(":status", $venda->getStatus());
			$sql->bindValue(":data", $venda->getData());
			$sql->execute();
			return $this->conexao->lastInsertId();
		}
	
	}
?>