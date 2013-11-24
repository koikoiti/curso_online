<?php
    include("functions/banco-inicio.php");
    
    $banco = new bancoinicio();
    
    $Sql = "UPDATE c_usuarios SET r1=0, r2=0, r3=0, r4=0, r5=0, r6=0, r7=0, r8=0, r9=0, r10=0 WHERE idusuario = " . $_SESSION["id"];

    $result = $banco->Execute($Sql);
    if($result){
        $banco->RedirecionaPara("inicio");
    }
?>