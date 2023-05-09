<?php
require_once 'atividade2.php'

?>

<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade primera questão</title>
</head>
<body>
    <style>
        body{
            background-color: cyan;
        }
    </style>
   <center><h2>Primeira questão</h2></center>
   <form action="" method="POST">
   Digite um número qualquer: <input type="text"name="v1">
   <input type="submit" value="Mostrar">
   Número digitado: <input type="text" name="v2" value="<?php echo $cal?>">
   </form>
</body>
</html>