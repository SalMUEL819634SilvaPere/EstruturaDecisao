<?php
    $numero = $_POST['numero'];
    if ($numero %2 ==0) {
        echo $numero." é par";
    }else{
        echo $numero." é impar";
    }
?>