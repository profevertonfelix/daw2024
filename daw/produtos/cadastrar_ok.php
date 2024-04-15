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
	
	$objUsuario = new Produtos();
	$objUsuario->setNome($nome);
	$objUsuario->setPreco($preco);
	$objUsuario->setFoto($nomefoto);
	$objUsuario->setIdcategoria($idcategoria);
	
	$objUsuarioDAO =new UsuariosDAO();
	//$retorno = $objUsuarioDAO->inserir($objUsuario);
	//if($retorno)
	//	header("location:index.php?admOk");
	//else
	//	header("location:cadastrar.php?error");
	
?>