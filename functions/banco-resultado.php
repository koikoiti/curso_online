<?php
    class bancoresultado extends banco{
        #Monta resultado
        function MontaResultado(){
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
                $Resultado = "Oops, para mostrar o resultado, falta você responder a(s) pergunta(s): <br/>";
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
    }#Fim Classe
?>