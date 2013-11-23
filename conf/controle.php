<?php
	include('functions/banco.php');
	include('tags.php');
	session_start('login');
	class controle{
		public function __construct(){
			$banco = new banco;
			$banco->Conecta();
			$banco->CarregaPaginas();
            $logado = $banco->VerificaSessao();
			$Conteudo = $banco->MontaConteudo($logado);
			$banco->Imprime($Conteudo);
		}
	}
?>