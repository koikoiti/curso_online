<?php
    include("functions/banco-resultado.php");
    
    $banco = new bancoresultado;
    
    $Conteudo = $banco->CarregaHtml("resultado");
?>