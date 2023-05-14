<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora </title>
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
    <form id="calculo" action="formula.php" method="get">
        <h1>Calculo de area y perimetro del cuadrado</h1>
        <hr>
        <label for="lado">cuanto mide el lado del cuadrado </label> 
        <input type="number" id="lado" name="lado" required>
        <br>
        <img src="./img/area_cuadrado.png" alt="cuadrado">
        <br>
        <hr>
        <h1>Calculo de area y perimetro del triangulo</h1>
        <hr>
        <label for="lado">cuanto mide la altura del triangulo</label> 
        <input type="number" id="altura" name="altura" required>
        <br>
        <label for="lado">cuanto mide la base del triangulo</label> 
        <input type="number" id="base" name="base" required>
        <br>
        <label for="lado">cuanto mide el lado_1 del triangulo </label> 
        <input type="number" id="a" name="a" required>
        <br>
        <label for="lado">cuanto mide el lado_2 del triangulo </label> 
        <input type="number" id="b" name="b" required>
        <div class="perimetro">
        <div class="formula_de_perimetro">
                <img src="./img/perimetro_formula.png" alt="formula_de_perimetro">
        </div>
        </div>

        <input id="calcular"; type="submit" value="calcular area y perimetro">     

    </form>
</body>
</html>