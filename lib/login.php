<?php
	#include das funcoes da tela inico
	include('functions/banco-login.php');

	#Instancia o objeto
	$banco = new bancologin();
    
    #trabalha com POST
   	if(isset($_POST["acao"]) && $_POST["acao"] != ''){
   	    $login = strip_tags(trim(addslashes($_POST["login"])));
       	$senha = strip_tags(trim(addslashes($_POST["senha"])));
    }

	#Imprimi valores
	$Conteudo = $banco->CarregaHtml('login');
?>