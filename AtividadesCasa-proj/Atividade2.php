<?php
    require_once 'atividade.php';
    $valor1 = $_POST['v1']; 
    $valor2 = $_POST ['v2'];

    if($valor1 < 0){
         $cal = "Menor que zero!";
    }
    else if($valor1 == 0){
         $cal = "Igual a zero!";
    }
    else if($valor1 > 0){
         $cal = "Maior que zero!";
    }
?>