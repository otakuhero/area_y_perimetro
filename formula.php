<?php
//formula para calcular el area y perimetro del cuadrado
$lado=$_GET["lado"];
$area=$lado*$lado;
$perimetro=$lado*4;
//formula para cualcular el area y perimetro del triangulo
$altura=$_GET["altura"];
$base=$_GET["base"];
$lado_1=$_GET["a"];
$lado_2=$_GET["b"];
$area_tirangulo=($base*$altura)/2;
$perimetro_triangulo=$base+$a+$b;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
    <link rel="stylesheet" href="./css/estilos.css">

</head>
<body>
<header>
        <div class="barra_navegacion">
                <img src="./img/logo.png" alt="logo">
            <div class="calculadora">
                <a href="./index.html">
                    <p>volver a informacion</p>
                </a>
            </div>
        </div>       
    </header> 
    <div class="resultado">
        <h1>el area del cuadrado es igual a: <?=$area?></h1>
        <h2>el perimetro del cuadrado es igual a:<?=$perimetro?></h2>
        <br>
        <h1>el area del triangulo es igual a: <?=$area_tirangulo?></h1>
        <h2>el perimetro del cuadrado es igual a:<?=$perimetro_triangulo?></h2>
    </div>   
</body>
</html>