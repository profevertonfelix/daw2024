<?php
	session_start();
	include_once "../class/Vendas.class.php";
	include_once "../class/VendasDAO.class.php";
	$objVendas = new Vendas();
	$objVendas->setId_usuario($_SESSION["idAdm"]);
	$objVendas->setData(date("Y-m-d"));
	$objVendas->setPagamento($_POST["pagamento"]);
	$objVendas->setEntrega($_POST["entrega"]);
	$objVendas->setStatus("pendente");
	$objVendasDAO = new VendasDAO();
	$retorno = $objVendasDAO->inserir($objVendas);
	if($retorno>0){
		echo "venda inserida com sucesso";
	}
	else{
		echo "venda nao inserida";
	}
	
	
?>