<?php

    echo "Estrutura de Decisão<br>";
    
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];

    echo "Nome: ".$nome."<br>";
    echo "Idade: ".$idade."<br>";

    if($idade >= 65){
        echo "Idade Feliz";
    }
    elseif($idade < 65 && $idade >= 18){
        echo "Maior Idade";
    }    
    else{
        echo "Menor Idade";
    }
?>