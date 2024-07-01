<?php
	class Vendas{
		private $id_venda;
		private $id_usuario;
		private $status;
		private $pagamento;
		private $entrega;
		private $data;
		
		
		public function getId_venda(){
			return $this->id_venda;
		}
		public function setId_venda($valor){
			$this->id_venda = $valor;
		}	
		public function getId_usuario(){
			return $this->id_usuario;
		}
		public function setId_usuario($valor){
			$this->id_usuario = $valor;
		}	
		
		public function getStatus(){
			return $this->status;
		}
		public function setStatus($valor){
			$this->status = $valor;
		}
		public function getPagamento(){
			return $this->pagamento;
		}
		public function setPagamento($valor){
			$this->pagamento = $valor;
		}
		public function getEntrega(){
			return $this->entrega;
		}
		public function setEntrega($valor){
			$this->entrega = $valor;
		}
		
		public function getData(){
			return $this->data;
		}
		public function setData($valor){
			$this->data = $valor;
		}
		
		
	}
?>