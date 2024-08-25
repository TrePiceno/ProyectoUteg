<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto WEB</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Tint&family=New+Amsterdam&display=swap" rel="stylesheet">
    <script src="../JS/main.js"></script>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body onload="mostrarElementoPHP()">
    <header>
        <ul>
            <a href="../index.html"><li>Inicio</li></a>
            <a href="./lenguaje_de_marcas.html"><li>Lenguaje de Marcas</li></a>
            <a href="./estilos_en_cascada.html"><li>Estilos en Cascada</li></a>
            <a href="./javascript.html"><li>JavaScript</li></a>
            <a href="./calculos_figuras.php"><li>PHP</li></a>
        </ul>
    </header>
    <main class="main_estilos fondo">
        <div id="encabezadoPHP" class="encabezado"></div>
        
        <div>
            <img class="img_php" src="../assets/areaCirculo.jpeg" alt="">
            
            <form method="post" action="">
                <h2>Area de un Circulo</h2>
                <label for="radio">Radio:</label>
                <input type="number" id="radio" name="radio" placeholder="radio en metros" required>
                <input type="submit" name="calcularCirculo" value="Calcular Area del Circulo">
            </form>

            <?php
    
            function areaCirculo($radio) {
                return pi() * pow($radio, 2);
            }
            
            if (isset($_POST['calcularCirculo'])) {
                $radio = $_POST['radio'];
                $areaCirculo = areaCirculo($radio);
                echo "<h3>El area del circulo es: " . number_format($areaCirculo, 2) . "</h3>";
            }
            ?>
            
            <img class="img_php" src="../assets/areaTrapecio.jpeg" alt="">
            
            <form method="post" action="" >
                <h2>Area de un Trapecio</h2>
                <label for="baseMayor">Base Mayor:</label>
                <input type="number" id="baseMayor" name="baseMayor" placeholder="valor más alto" required>
                <label for="baseMenor">Base Menor:</label>
                <input type="number" id="baseMenor" name="baseMenor" placeholder="valor más bajo" required>
                <label for="altura">Altura:</label>
                <input type="number" id="altura" name="altura" placeholder="altura en metros" required>
                <input type="submit" name="calcularTrapecio" value="Calcular Area del Trapecio">
            </form>
            <?php
    
            function areaTrapecio($baseMayor, $baseMenor, $altura) {
                return (($baseMayor + $baseMenor) * $altura) / 2;
            }
            
            if (isset($_POST['calcularTrapecio'])) {
                $baseMayor = $_POST['baseMayor'];
                $baseMenor = $_POST['baseMenor'];
                $altura = $_POST['altura'];
                $areaTrapecio = areaTrapecio($baseMayor, $baseMenor, $altura);
                echo "<h2>El area del trapecio es: " . number_format($areaTrapecio, 2) . "</h2>";
            }
            ?>
        </div>
    </main>
    <footer>
        <p>Este sitio web fue creado con motivos educativos para la materia de Programación Web</p>
    </footer>
</body>
</html>