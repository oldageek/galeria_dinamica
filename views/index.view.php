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
            <h1 class="titulo">Mi increible Galeria de PHP</h1>
        </div>
    </header>

    <section class="fotos">
        <div class="contenedor">
            <?php foreach($fotos as $foto): ?>
                <div class="thumb">
                    <a href="foto.php?id=<?php echo $foto['id'] ?>">
                        <img src="fotos/<?php echo $foto['imagen'] ?>" alt="">
                    </a>
                </div>
            <?php endforeach; ?>

            <div class="paginacion">
                <?php if($pagina_actual > 1): ?>
                    <a href="index.php?p=<?php echo $pagina_actual - 1; ?>" class="izquierda"> <i class="fas fa-arrow-left"></i> Pagina Anterior</a>
                <?php endif ?>

                <?php if($total_paginas != $pagina_actual): ?>
                    <a href="index.php?p=<?php echo $pagina_actual + 1; ?>" class="derecha"> Pagina Siguiente <i class="fas fa-arrow-right"></i></a>
                <?php endif ?>
            </div>
        </div>
    </section>

    <footer>
        <p class="copyright">Galeria creada por Geek Prime   2019 - 2020</p>
    </footer>
</body>
</html>