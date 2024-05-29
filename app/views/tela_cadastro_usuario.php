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
    ?>
    <div class="container">
        <h1>Cadastro</h1>
        <form>
            <div class="mb-3">
                <label for="exampleInputUsername" class="form-label">Username</label>
                <input type="text" class="form-control" id="exampleInputUsername">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <a href="/tela/login">voltar para o login</a>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

    <?php
    include_once (__DIR__ . '\scripts\bootstrap.php');
    ?>
</body>

</html>