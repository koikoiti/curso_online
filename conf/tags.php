<?php
	#Definições do Sistema
	date_default_timezone_set('America/Sao_Paulo');
	define('UrlPadrao' , "http://localhost/curso_online/");
	
	#Definições do Banco de Dados
	define('DB_Host' , "db4free.net");
	define('DB_Database' , "cursoonline");
	define('DB_User' , "cursoonline");
	define('DB_Pass' , "s1stem@");
	
	#Mensagens
    define('MsgErro_Senha' , '<div class="bs-docs-example"><div class="alert alert-error"><button class="close" data-dismiss="alert" type="button">x</button><strong>Erro! </strong>Senha incorreta!</div></div>');
	define('MsgErro_SenhaDiferente' , '<div class="bs-docs-example"><div class="alert alert-error"><button class="close" data-dismiss="alert" type="button">x</button><strong>Erro! </strong>Erro no Campo Senha.</div></div>');
	define('MsgErro_Usuario' , '<div class="bs-docs-example"><div class="alert alert-error"><button class="close" data-dismiss="alert" type="button">x</button><strong>Erro! </strong>Usuário não existe.</div></div>');
?>