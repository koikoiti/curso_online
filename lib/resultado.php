<?php
    include("functions/banco-resultado.php");
    
    $banco = new bancoresultado;
    
    #Monta Resultados
    $Resultado = $banco->MontaResultado();
    
    $Conteudo = $banco->CarregaHtml("resultado");
    $Conteudo = str_replace("<%RESULTADO%>", $Resultado, $Conteudo);
?>