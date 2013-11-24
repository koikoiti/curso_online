<?php
	class bancoinicio extends banco{
		
     	function BuscaUltimoAcesso($id){
        	$Sql = 'SELECT * FROM c_acesso where idusuario = "'.$id.'" order by data DESC limit 1,1 ';
            
        	$result = parent::Execute($Sql);
        	$num_rows = parent::Linha($result);
  	        if($num_rows){
	           $rs = mysql_fetch_array($result , MYSQL_ASSOC);
                return $rs['data'];
            }
        }
        
        function MontaQ(){
            $Sql = "SELECT * FROM c_usuarios WHERE idusuario = ". $_SESSION["id"];
            $result = parent::Execute($Sql);
            $rs = mysql_fetch_array($result, MYSQL_ASSOC);
            for($i = 1; $i < 11; $i++){
                $coluna = "r" . $i;
                if($rs[$coluna] == 0){
                    $falta[] = $i;
                }
            }
            if($falta){
                $total = count($falta);
                $cont = 1;
                $Resultado = "Oops,ainda falta você responder a(s) pergunta(s): ";
                foreach($falta as $f){
                    if($cont == $total){
                        $Resultado .= $f. ".";
                    }else{
                        $Resultado .= $f . ",";
                    }
                    $cont++;
                }
            }else{
                #Calcula resultado
            }
            return $Resultado;
        }#Fim MontaResultado
  }
?>