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
  }
?>