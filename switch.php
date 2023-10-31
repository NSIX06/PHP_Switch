<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="">
    <label >Escolha vermelho ou verde</label>
        <input type="text" name="color">
        <input type="submit" value="Verificar">
    </form>

    
<?php 





      if  (isset($_GET["color"]))
      {
        $color = $_GET["color"];
        switch($color) 
        { 
        case "vermelho":
            echo "Olá!";
            break;
        case  "verde":
            echo "Bem-vindo!";
            break;
        }
    }





?>

</body>
</html>