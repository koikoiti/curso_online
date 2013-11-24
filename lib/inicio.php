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
    $questoes = $banco->MontaQ($_SESSION['id']);
    if($questoes == NULL){
        $questoes = 'Curso Concluído.';
        $cor = 'green';
    }else{
        $cor = 'red';
    }
    

	#Imprimi valores
	$Conteudo = $banco->CarregaHtml('inicio');
    $Conteudo = str_replace('<%ACESSO%>',$acesso,$Conteudo);
    $Conteudo = str_replace('<%Q%>',$questoes,$Conteudo);
    $Conteudo = str_replace('<%COR%>',$cor,$Conteudo);
    $Conteudo = str_replace('<%USUARIO%>',$_SESSION['usuario'],$Conteudo);
?>
