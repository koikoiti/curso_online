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
    
    #Trabalha com POST
    if(isset($_POST["acao"]) && $_POST["acao"] != ""){
        if($_POST["resultado"]){
            $banco->RedirecionaPara("resultado");
        }
        if($_POST["resposta"]){
            #User selecionou uma resposta. Fazer INSERT
            $coluna = "r" . $idpergunta;
            $Sql = "UPDATE c_usuarios SET $coluna = ".$_POST['resposta'];
            $result = $banco->Execute($Sql);
        }
        if($_POST["proximo"]){
            $banco->RedirecionaPara("pergunta/".($idpergunta + 1));
        }
        if($_POST["anterior"]){
            $banco->RedirecionaPara("pergunta/".($idpergunta - 1));
        }
    }
    
    #Monta as paginações
    if($idpergunta == "1"){
        $proximo = "<input type='submit' name='proximo' value='Pr&oacute;xima' class='btn btn-primary'>";
        $anterior = "";
    }elseif($idpergunta == "10"){
        $proximo = "<input type='submit' name='resultado' value='Calcular Resultado' class='btn btn-primary'>";
        $anterior = "<input type='submit' name='anterior' value='Anterior' class='btn btn-primary'>";
    }else{
        $proximo = "<input type='submit' name='proximo' value='Pr&oacute;xima' class='btn btn-primary'>";
        $anterior = "<input type='submit' name='anterior' value='Anterior' class='btn btn-primary'>";
    }
    
	#Imprimi valores
	$Conteudo = $banco->CarregaHtml('pergunta');
    $Conteudo = str_replace("<%PERGUNTA%>", utf8_decode($pergunta), $Conteudo);
    $Conteudo = str_replace("<%RESPOSTAS%>", utf8_decode($Respostas), $Conteudo);
    $Conteudo = str_replace("<%NUMERO%>", $idpergunta, $Conteudo);
    $Conteudo = str_replace("<%PROXIMO%>", $proximo, $Conteudo);
    $Conteudo = str_replace("<%ANTERIOR%>", $anterior, $Conteudo);
?>