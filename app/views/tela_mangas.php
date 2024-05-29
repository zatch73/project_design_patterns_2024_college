<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <?php
    include_once (__DIR__ . '\css\bootstrap.php');
    ?>
</head>

<body>
    <?php
    include_once (__DIR__ . '\components\menu.php');

    function criarEstruturaManga()
    {
        echo "<div class='card' style='width: 18rem;'>
        <img src='https://img.elo7.com.br/product/zoom/1EDFF3A/big-poster-do-anime-one-piece-tamanho-90x-0-cm-lo122-one-piece.jpg' class='card-img-top' alt='...'>
        <div class='card-body'>
          <h5 class='card-title'>Card title</h5>
          <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button href='#' class='btn btn-primary'>Adicionar 1 no carrinho</button>
          <button href='#' class='btn btn-danger'>Remover 1 do carrinho</button>
        </div>
      </div>";
    }
    criarEstruturaManga();
    ?>


    <?php
    include_once (__DIR__ . '\scripts\bootstrap.php');
    ?>
</body>

</html>