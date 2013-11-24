<?php
	#include das funcoes da tela inico
	include('functions/banco-inicio.php');

	#Instancia o objeto
	$banco = new bancoinicio();
    
    #Busca Ultimo Acesso
    $acesso = BuscaUltimoAcesso($_SESSION['id']);

	#Imprimi valores
	$Conteudo = $banco->CarregaHtml('inicio');
    $Conteudo = str_replace('<%ACESSO%>',$acesso,$Conteudo);
?>