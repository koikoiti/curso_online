<?php
	class bancoinicio extends banco{
		
     	function BuscaUltimoAcesso($id){
        	$Sql = 'SELECT * FROM c_acesso where idusuario = "'.$id.'" order by DESC limit 1,1 ';
        	$result = $this->Execute($Sql);
        	$num_rows = $this->Linha($result);
        	   if($num_rows){
    			 $rs = mysql_fetch_array($result , MYSQL_ASSOC);
                 return $rs['acesso'];
                }
        }
  }
?>