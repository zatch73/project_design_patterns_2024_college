<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME </title>
    <?php
    include_once (__DIR__ . '\css\bootstrap.php');
    ?>
</head>

<body>
    <?php
    include_once (__DIR__ . '\components\menu.php');
    ?>

    <div class="container text-center ">
        <h1>HOME</h1>
        <div class="row align-items-start">
            <div class="col">
            </div>
            <div class="col d-flex justify-content-center">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel"
                    style="width: 300px">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://img.elo7.com.br/product/zoom/1EDFF3A/big-poster-do-anime-one-piece-tamanho-90x-0-cm-lo122-one-piece.jpg"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://m.media-amazon.com/images/I/61RhWaYBp7L._AC_SL1044_.jpg"
                                class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col">
            </div>
        </div>
    </div>

    <!-- <img
        src="https://img.elo7.com.br/product/zoom/1EDFF3A/big-poster-do-anime-one-piece-tamanho-90x-0-cm-lo122-one-piece.jpg">
    <img
        src="https://img.elo7.com.br/product/zoom/1EDFF3A/big-poster-do-anime-one-piece-tamanho-90x-0-cm-lo122-one-piece.jpg">
    <img
        src="https://img.elo7.com.br/product/zoom/1EDFF3A/big-poster-do-anime-one-piece-tamanho-90x-0-cm-lo122-one-piece.jpg">
    <img
        src="https://img.elo7.com.br/product/zoom/1EDFF3A/big-poster-do-anime-one-piece-tamanho-90x-0-cm-lo122-one-piece.jpg"> -->
    <?php
    include_once (__DIR__ . '\scripts\bootstrap.php');
    ?>
</body>

</html>