<?php
	session_start();
	
	include_once "../class/Produtos.class.php";
	include_once "../class/ProdutosDAO.class.php";
	
	if(!isset($_SESSION['logadoAdm'])){
		header("location=../login.php");
	}
	
	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$idcategoria = $_POST['idcategoria'];
	
	$nomefoto = $_FILES['foto']['name'];
	$tmpfoto = $_FILES['foto']['tmp_name'];
	$direcao = "../img/".$nomefoto;
	if(move_uploaded_file($tmpfoto, $direcao))
		echo "sucesso foto";
	else
		echo "insucesso foto";
	
	$objProduto = new Produtos();
	$objProduto->setNome($nome);
	$objProduto->setPreco($preco);
	$objProduto->setFoto($nomefoto);
	$objProduto->setIdcategorias($idcategoria);
	
	$objProdutoDAO =new ProdutosDAO();
	$retorno = $objProdutoDAO->inserir($objProduto);
	if($retorno)
		header("location:listar.php?InserirOk");
	else
		header("location:cadastrar.php?error");
	
?>