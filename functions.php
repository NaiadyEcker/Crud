<?php
    function validarCampos($name,$IDADE,$telefone,$email){
        $isValid = true;

        if(empty($name)) {
            echo "<font color='red'>O campo nome está vazio</font><br/>";
            $isValid = false;
        }

        if(empty($IDADE) || !is_numeric($IDADE)) {
            echo "<font color='red'>O campo idade está vazio ou não é válido</font><br/>";
            $isValid = false;
        }

    
        if(empty($telefone)) {
            echo "<font color='red'>O campo telefone está vazio</font><br/>";
            $isValid = false;
        }
        
        if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<font color='red'>O campo e-mail está vazio ou não é válido</font><br/>";
            $isValid = false;
        }
        
        return $isValid;
    }