<?php
    class bancopergunta extends banco{
        
        function MontaPergunta($idpergunta){
            $Sql = "SELECT pergunta FROM c_perguntas WHERE idpergunta = " . $idpergunta;
            $result = parent::Execute($Sql);
            $rs = mysql_fetch_array($result, MYSQL_ASSOC);
            return $rs["pergunta"];
        }#Fim MontaPergunta
        
        function MontaRespostas($idpergunta){
            $Auxilio = parent::CarregaHtml('itens/respostas-itens');
            $Sql = "SELECT * FROM c_respostas WHERE idpergunta = " . $idpergunta;
            $result = parent::Execute($Sql);
            $SqlRespostas = "SELECT * FROM c_usuarios WHERE idusuario = " . $_SESSION["id"];
            $resultRespostas = parent::Execute($SqlRespostas);
            $rsRespostas = mysql_fetch_array($resultRespostas, MYSQL_ASSOC);
            while($rs = mysql_fetch_array($result, MYSQL_ASSOC)){
                $Linha = $Auxilio;
                if($rs["idresposta"] == $rsRespostas["r" . $idpergunta]){
                    $checked = "checked";
                }else{
                    $checked = "";
                }
                $Linha = str_replace("<%IDRESPOSTA%>", $rs["idresposta"], $Linha);
                $Linha = str_replace("<%RESPOSTA%>", $rs["resposta"], $Linha);
                $Linha = str_replace("<%CHECKED%>", $checked, $Linha);
                $Respostas .= $Linha;
            }
            return $Respostas;
        }#Fim MontaRespostas
    }#Fim classe
?>