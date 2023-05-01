<?php
$corfonte = filter_input(INPUT_GET, "corfonte", FILTER_SANITIZE_SPECIAL_CHARS);
$bg = filter_input(INPUT_GET, "bg", FILTER_SANITIZE_SPECIAL_CHARS);
$img = filter_input(INPUT_GET, "img", FILTER_SANITIZE_URL);
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3 - Lâmpada Liga/Desliga</title>

    <style>
        body {
            padding: 20px 0 0 40px;
            background-color: <?= $bg; ?>;
            color: <?= $corfonte; ?>;
            font-family: Arial, Helvetica, sans-serif;
            max-width: 100%;
        }

        .lampada {
            display: flex;
            justify-content: center;
            user-select: none;
        }

        .alterar {
            display: flex;
            justify-content: space-around;
        }

        button {
            box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
            padding: 10px;
            border-radius: 7px;
            margin-top: 10px;
            width: 100px;
            font-size: large;
        }

        img {
            height: 300px;
        }

        p {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <h1>Exercício 3 - Lâmpada liga/desliga com PHP</h1>

    <div class="lampada">
        <img src="<?= $img; ?>" alt="imagem de uma lâmpada">
    </div>

    <div class="alterar">
        <a href="?corfonte=black&bg=white&img=lampada-acesa.png">
            <button type="submit">Acender</button>
        </a>

        <a href="?corfonte=white&bg=black&img=lampada.png">
            <button type="submit">Apagar</button>
        </a>
    </div>

    <p>
        <a href="menu.php">Voltar ao menu de exercícios</a>
    </p>
</body>

</html>