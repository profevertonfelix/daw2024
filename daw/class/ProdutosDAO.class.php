<?php
	include_once "Produtos.class.php";
	class ProdutosDAO{
		public function __construct(){
			$this->conexao = 
			new PDO("mysql:host=localhost; dbname=ecommerceeverton", 
			"root", "");
		}
		
		
		public function inserir(Produtos $produto){
			$sql= $this->conexao->prepare(
			"INSERT INTO produtos (preco, nome, idcategorias, foto) VALUES 
			(:preco, :nome, :idcategorias, :foto)");
			$sql->bindValue(":preco", $produto->getPreco());
			$sql->bindValue(":nome", $produto->getNome());
			$sql->bindValue(":idcategorias", $produto->getIdcategorias());
			$sql->bindValue(":foto", $produto->getFoto());
			return $sql->execute();
		}
	
	}
?>