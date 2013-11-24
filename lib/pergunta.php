<?php
	#include das funcoes da tela inico
	include('functions/banco-pergunta.php');

	#Instancia o objeto
	$banco = new bancopergunta();
    
    #Pega idpergunta da URL
    $idpergunta = $this->PaginaAux[0];
    
    #Monta pergunta
    $pergunta = $banco->MontaPergunta($idpergunta);
    
    #Monta as respostas da pergunta
    $Respostas = $banco->MontaRespostas($idpergunta);
    
	#Imprimi valores
	$Conteudo = $banco->CarregaHtml('pergunta');
    $Conteudo = str_replace("<%PERGUNTA%>", utf8_decode($pergunta), $Conteudo);
    $Conteudo = str_replace("<%RESPOSTAS%>", utf8_decode($Respostas), $Conteudo);
?>