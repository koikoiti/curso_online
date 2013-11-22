<?php
	#include das funcoes da tela inico
	include('functions/banco-login.php');

	#Instancia o objeto
	$banco = new bancologin();

	#Imprimi valores
	$Conteudo = $banco->CarregaHtml('login');
?>