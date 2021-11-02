<?php

    echo "Estrutura de Decisão<br>";
    
    $nome = $_POST["nome"];
    $media = $_POST["media"];

    echo "Nome: ".$nome."<br>";
    echo "Média: ".$media."<br>";

    if($media >= 7){
        echo "Aprovado";
    }
    elseif($media < 7 && $media >= 5){
        echo "Recuperação";
    }    
    else{
        echo "Reprovado";
    }
?>