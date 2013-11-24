<?php
	#include das funcoes da tela inico
	include('functions/banco-inicio.php');

	#Instancia o objeto
	$banco = new bancoinicio();
    
    #Busca Ultimo Acesso
    $acesso = $banco->BuscaUltimoAcesso($_SESSION['id']);
    $aux = explode(' ',$acesso);
    $data = date("d/m/Y", strtotime($aux[0]));
    $acesso = $data.' '.$aux[1];
    
    #Busca quantas questoes falta
    $questoes = $banco->BuscaQuestoes($_SESSION['id']);
    

	#Imprimi valores
	$Conteudo = $banco->CarregaHtml('inicio');
    $Conteudo = str_replace('<%ACESSO%>',$acesso,$Conteudo);
?>