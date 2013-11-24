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
                $acertos = 0;
                #Calcula resultado
                for($i = 1; $i < 11; $i++){
                    $coluna = "r" . $i;
                    $respUser = $rs[$coluna];
                    $SqlCerto = "SELECT * FROM c_respostas WHERE idpergunta = $i AND correta = 1";
                    $resultCerto = parent::Execute($SqlCerto);
                    $rsCerto = mysql_fetch_array($resultCerto, MYSQL_ASSOC);
                    $correta = $rsCerto["idresposta"];
                    if($respUser == $correta){
                        $certas[$i] = true;
                    }else{
                        $certas[$i] = false;
                    }
                }
                
                foreach($certas as $key=>$value){    
                    if($value == true){
                        $Resultado .= "Questão: $key - Acertou <br/>";
                        $acertos++;
                    }else{
                        $Resultado .= "Questão: $key - Errou <br/>";
                    }
                }
                if($acertos >= 7){
                $Resultado .= "<br/> Você obteve " . ($acertos * 10) . "% no teste!<br><br> <strong>APROVADO!</strong>";
                }else{
                $Resultado .= "<br/> Você obteve " . ($acertos * 10) . "% no teste!<br><br> <strong>REPROVADO!</strong>";   
                }
            }
            return $Resultado;
        }#Fim MontaResultado
    }#Fim Classe
?>