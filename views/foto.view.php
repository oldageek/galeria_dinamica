<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px&display=swap" rel="stylesheet">
    <script src="js/all.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <title>Galeria</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <h1 class="titulo">Foto: <?php if(!empty($foto['titulo'])) {
                echo $foto['titulo'];
            } else {
                echo $foto['imagen'];
            }
            ?></h1>
        </div>
    </header>

    <div class="contenedor">
        <div class="foto">
            <img src="fotos/<?php echo $foto['imagen']; ?>" alt="">
            <p class="texto"><?php echo $foto['texto']; ?></p>
            <a href="index.php" class="regresar"><i class="fas fa-arrow-left"></i> Regresar</a>
        </div>
    </div>

    <footer>
        <p class="copyright">Galeria creada por Geek Prime   2019 - 2020</p>
    </footer>
</body>
</html>