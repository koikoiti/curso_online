<?php
	class banco{
		
		#Funcao que inicia conexao com banco
		function Conecta(){	
			$link = mysql_connect(DB_Host,DB_User,DB_Pass);
			if (!$link) {
				$this->ChamaManutencao();
			}
			$db_selected = mysql_select_db(DB_Database, $link);
			if (!$db_selected) {
				$this->ChamaManutencao();
			}
		}
        
        #Fecha Sessao
		function FechaSessao(){
			$_SESSION = array();
			session_destroy();
		}	
		
		#funcao imprime conteudo
		function Imprime($Conteudo){
            if($this->Pagina == "login" || $this->Pagina == "inicio" || $this->VerificaSessao() == false){
                $menu = "";
            }else{
                $menu = $this->CarregaHtml('menu');
            }
			$SaidaHtml = $this->CarregaHtml('modelo');
            $SaidaHtml = str_replace('<%MENU%>',$menu,$SaidaHtml);
			$SaidaHtml = str_replace('<%CONTEUDO%>',$Conteudo,$SaidaHtml);
			$SaidaHtml = str_replace('<%URLPADRAO%>',UrlPadrao,$SaidaHtml);
			echo $SaidaHtml;
		}
		
		#funcao que chama manutencao
		function ChamaManutencao(){
			$filename = 'html/manutencao.html';
			$handle = fopen($filename,"r");
			$Html = fread($handle,filesize($filename));
			fclose($handle);
			$SaidaHtml = $this->CarregaHtml('modelo');
			$SaidaHtml = str_replace('<%CONTEUDO%>',$Html,$SaidaHtml);
			$SaidaHtml = str_replace('<%URLPADRAO%>',UrlPadrao,$SaidaHtml);
			echo $SaidaHtml;
		}
        
        #Abre Sessao
		function AbreSessao($nome){
			session_start('login');
			$Sql = 'SELECT * FROM c_usuarios WHERE nome = "'.$nome.'" ';
			$result = $this->Execute($Sql);
			$num_rows = $this->Linha($result);
			if($num_rows){
				$rs = mysql_fetch_array($result , MYSQL_ASSOC);
				$_SESSION['usuario'] = $nome;
				$_SESSION['idsetor'] = $rs['idsetor'];
				$_SESSION['id'] = $rs['idusuario'];
                
                #Salva que logou
                $acesso = date("Y-m-d H:i:s");
                $SqlInsertAcesso = 'Insert into c_acesso (idusuario,data) values ("'.$rs['idusuario'].'","'.$acesso.'")';
                $result = $this->Execute($SqlInsertAcesso);
			}
		}
		
        #Verifica se esta logado
		function VerificaSessao(){
			if(isset($_SESSION['usuario']) ){
				return true;
			}else{  
                return false;
			}
		}
        
		#funcao que monta o conteudo
		function MontaConteudo($logado){
            if($logado){
    			#verifica se nao tem nada do lado da URLPADRAO
    			if(!isset($this->Pagina)){
    				return $Conteudo = $this->ChamaPhp('inicio');
    			#verifica se a pagina existe e chama ela
    			}elseif($this->BuscaPagina()){
    				return $Conteudo = $this->ChamaPhp($this->Pagina);
    			#Se nao tiver pagina chama 404
    			}else{
    				return $Conteudo = $this->CarregaHtml('404');
    			}
            }else{
                return $Conteudo = $this->ChamaPhp('login');
            }
		} 
		
		#Busca a pagina e verifica se existe
		function BuscaPagina(){
			$Sql = "Select * from c_paginas where nome = '".$this->Pagina."'";
			$result = $this->Execute($Sql);
			$num_rows = $this->Linha($result);
			if($num_rows){
				return true;
			}else{
				return false;
			}
		}
		
		#Fun��o que chama a pagina.php desejada.
		public function ChamaPhp($Nome){
			@require_once('lib/'.$Nome.'.php');
			return $Conteudo;
		}
	
		#Fun��o que monta o html da pagina
		public function CarregaHtml($Nome){
			$filename = 'html/'.$Nome.".html";
			$handle = fopen($filename,"r");
			$Html = fread($handle,filesize($filename));
			fclose($handle);
			return $Html;
		}
		
		#Funcao que executa uma Sql e retorna.
		static function Execute($Sql){
			$result = mysql_query($Sql);
			return $result;
		}
		
		#Funcao que retorna o numero de linhas 
		static function Linha($result){
			$num_rows = mysql_num_rows($result);
			return $num_rows;
		}
		
		#Funcao que redireciona para pagina solicitada
		function RedirecionaPara($nome){
			header("Location: ".UrlPadrao.$nome);
		}
		
		#Funcao que carrega as p�ginas
		function CarregaPaginas(){
			$urlDesenvolve = 'curso_online';
			$primeiraBol = true;
			$uri = $_SERVER["REQUEST_URI"];
			$exUrls = explode('/',$uri);
			$SizeUrls = count($exUrls)-1;

			$p = 0;
			foreach( $exUrls as $chave => $valor ){
				if( $valor != '' && $valor != $urlDesenvolve ){
					$valorUri = $valor;
					$valorUri = strip_tags($valorUri);
					$valorUri = trim($valorUri);
					$valorUri = addslashes($valorUri);
					
					if( $primeiraBol ){
						$this->Pagina = $valorUri;
						$primeiraBol = false;
					}else{
						$this->PaginaAux[$p] = $valorUri;
						$p++;
					}
				}
			}
		}
	}
?>