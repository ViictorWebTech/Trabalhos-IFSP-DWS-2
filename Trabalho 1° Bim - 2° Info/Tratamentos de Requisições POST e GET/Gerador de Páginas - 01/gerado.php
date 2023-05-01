<?php

$title = filter_input(INPUT_POST, "titulo", FILTER_SANITIZE_SPECIAL_CHARS);
$corpo = filter_input(INPUT_POST, "corpo", FILTER_SANITIZE_SPECIAL_CHARS);
$cortxt = filter_input(INPUT_POST, "cortexto", FILTER_SANITIZE_SPECIAL_CHARS);
$urlimg = filter_input(INPUT_POST, "urlimagem", FILTER_SANITIZE_URL);
$urllink = filter_input(INPUT_POST, "urllink", FILTER_SANITIZE_URL);
$bg = filter_input(INPUT_POST, "corfundo", FILTER_SANITIZE_SPECIAL_CHARS);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>

<style>
    body {
        padding: 20px 0 0 40px;
        background-color: <?= $bg; ?>;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 20px;
        color: <?= $cortxt; ?>;
        max-width: 100%;
    }

    img{
        max-width: 100%;
    }

    div {
        margin: 20px 0 0 0;
    }
</style>

<body>
    <div>
        <h1><?= $title; ?></h1>
        <hr>
    </div>

    <div>
        <p><?= $corpo; ?></p>
    </div>

    <div>
        <img src="<?= $urlimg; ?>" alt="">
    </div>

    <div>
        <a href="<?= $urllink; ?>" target="_blank"><?= $urllink; ?></a>
    </div>

    <br>
    <br>
    <p class="voltar">
        <a href="menu.php">Voltar ao menu de atividades</a>
    </p>

</body>

</html>