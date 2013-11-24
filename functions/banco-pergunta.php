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
            while($rs = mysql_fetch_array($result, MYSQL_ASSOC)){
                $Linha = $Auxilio;
                $Linha = str_replace("<%IDRESPOSTA%>", $rs["idresposta"], $Linha);
                $Linha = str_replace("<%RESPOSTA%>", $rs["resposta"], $Linha);
                $Respostas .= $Linha;
            }
            return $Respostas;
        }#Fim MontaRespostas
    }#Fim classe
?>