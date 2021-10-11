<?php
function GeneratePassword($qtd){
    $Caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMOPQRSTUVXWYZ0123456789';
    $QuantiteDeCaracteres = strlen($Caracteres);
    $QuantiteDeCaracteres--;
    
    $Hash=NULL;
        for($i=1;$i<=$qtd;$i++){
            $Pos = rand(0,$QuantiteDeCaracteres);
            $Hash .= substr($Caracteres,$Pos,1);
        } 
    return $Hash;
    }
?>
