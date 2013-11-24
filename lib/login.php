<?php
	$msg = '';
	#Include nas funcoes do cliente
	include('functions/banco-login.php');
	
	#Instancia objeto que vai tratar o banco de dados dessa pagina
	$banco = new bancologin;
    
    #Trabalha com sair
	if ($this->PaginaAux[0] == 'sair'){
		$banco->FechaSessao();
		$banco->RedirecionaPara('login');
	}
    
	#Trabalha com Post
	if( isset($_POST["acao"]) && $_POST["acao"] != '' ){
		$nome = strip_tags(trim(addslashes($_POST["nome"])));
		$senha = strip_tags(trim(addslashes($_POST["senha"])));
		
		#Busca Usuario no banco e verifica se ele existe
		$result = $banco->BuscaUsuario($nome);
		$num_rows = $banco->Linha($result);
		$rs = mysql_fetch_array($result , MYSQL_ASSOC);
		$senhab = $rs['senha'];
		if (!$num_rows) {
			$msg = MsgErro_Usuario;
		}else if ($senha === $senhab){
			$banco->AbreSessao($nome);
			$banco->RedirecionaPara('inicio');
		}else{
			$msg = MsgErro_Senha;
		}
	}
	
	#Imprimi Valores
	$Conteudo = $banco->CarregaHtml('login');
	$Conteudo = str_replace('<%MSG%>',$msg,$Conteudo);

?>