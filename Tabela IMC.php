<?php

    echo "Estrutura de Decisão<br>";
    
    $nome = $_POST["nome"];
    $peso = str_replace(",",".",$_POST["peso"]) ;
    $altura = str_replace(",",".",$_POST["altura"]);

    echo "Nome: ".$nome."<br>";
    echo "Peso: ".$peso."<br>";
    echo "Altura: ".$altura."<br>";

    $imc = $peso / ($altura * $altura);

    echo "IMC: ".number_format($imc,2)."<br>";

    if($imc < 18.5){
        echo "Magreza - Grau 0";
    }
    elseif($imc >= 18.5 && $imc < 24.9){
        echo "Normal - Grau 0";
    }
    elseif($imc >= 24.9 && $imc <= 29.9)
    {
        echo "Sobrepeso - Grau I";
    }
    elseif($imc >= 30 && $imc <= 39.9)
    {
        echo "Obesidade - Grau II";
    }else{
        echo "Obesidade Grave - Grau III";
    }

?>