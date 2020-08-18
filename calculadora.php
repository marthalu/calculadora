<html>
    <head>
        <title>
        Calculadora
        </title>
    </head>
    <body>
    
        <form  method="post">
           Numero 1: <input type="text" name="numero1"> 
            <br><br>
           Numero 2: <input type="text" name="numero2"> 
           <br><br> 
            <select name="opciones">
                <option value="0">Sumar</option>
                <option value="1">Restar</option>
                <option value="2">Multiplicar</option>
                <option value="3">Dividir</option>
            </select>
            <br><br>
            <br><br>
            <input type="submit" name="Calcular" value="enviar">


        </form>
    </body>
</html>

<?php

$Nr1 = $_REQUEST["numero1"];
$Nr2 = $_REQUEST["numero2"];
$opcion = $_REQUEST["opciones"];

switch ($opcion) {
    case 0:
        $resultado=$Nr1+$Nr2;
        echo "La suma es: " . $resultado;
        break;
    case 1:
        $resultado=$Nr1-$Nr2;
        echo "La resta es: " . $resultado;
        break;
    case 2:
        $resultado=$Nr1*$Nr2;
        echo "La multiplicacion es: " . $resultado;
        break;
    case 3:
         $resultado=$Nr1/$Nr2;
        echo "La division es: " . $resultado;
        break;
}

?>