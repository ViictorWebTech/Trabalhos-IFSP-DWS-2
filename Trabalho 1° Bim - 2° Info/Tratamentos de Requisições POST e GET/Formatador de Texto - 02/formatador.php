<?php
$corp = filter_input(INPUT_GET, "corp", FILTER_SANITIZE_SPECIAL_CHARS);
$identar = filter_input(INPUT_GET, "identar", FILTER_SANITIZE_SPECIAL_CHARS);
$tamanho = filter_input(INPUT_GET, "tamanho", FILTER_SANITIZE_SPECIAL_CHARS);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>

    <style>
        body{
            max-width: 100%;
        }
        .parag {
            color: <?= $corp; ?>;
            text-align: <?= $identar; ?>;
            font-size: <?= $tamanho; ?>;
        }
    </style>

</head>

<body>
    <h1>Exercício 2 - Formatador de texto</h1>
    <hr>

    <p class="parag">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero temporibus porro facere. Id eos ipsa soluta, dicta officia voluptate, a quaerat sapiente ipsam mollitia laborum quo. Magnam ullam veritatis provident?</p>
    <p class="parag">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus distinctio pariatur qui deserunt nemo quae vel debitis assumenda, in odit sequi doloribus quisquam repudiandae non voluptatem, explicabo adipisci veniam. Rem.</p>
    <hr>

    <h2>Controles</h2>

    <div class="pai">
        <div class="filho">

            <p>Cor do texto dos paragráfos:</p>

            <a href="formatador.php?corp=red&identar=<?= $identar; ?>&tamanho=<?= $tamanho; ?>">
                <button type="submit">Vermelho</button>
            </a>

            <a href="formatador.php?corp=green&identar=<?= $identar; ?>&tamanho=<?= $tamanho; ?>">
                <button type="submit">Verde</button>
            </a>

            <a href="formatador.php?corp=blue&identar=<?= $identar; ?>&tamanho=<?= $tamanho; ?>">
                <button type="submit">Azul</button>
            </a>

        </div>
    </div>

    <div class="pai">
        <div class="filho">

            <p>Alinhamento do texto dos parágrafos:</p>

            <a href="formatador.php?corp=<?= $corp; ?>&identar=left&tamanho=<?= $tamanho; ?>">
                <button type="submit">Esquerda</button>
            </a>

            <a href="formatador.php?corp=<?= $corp; ?>&identar=center&tamanho=<?= $tamanho; ?>">
                <button type="submit">Centro</button>
            </a>

            <a href="formatador.php?corp=<?= $corp; ?>&identar=right&tamanho=<?= $tamanho; ?>">
                <button type="submit">Direita</button>
            </a>
        </div>
    </div>

    <p>Tamanho da fonte do texto dos parágrafos:</p>

    <div class="pai">
        <div class="filho">

            <a href="formatador.php?corp=<?= $corp; ?>&identar=<?= $identar; ?>&tamanho=small">
                <button type="submit">Pequena</button>
            </a>

            <a href="formatador.php?corp=<?= $corp; ?>&identar=<?= $identar; ?>&tamanho=medium">
                <button type="submit">Média</button>
            </a>

            <a href="formatador.php?corp=<?= $corp; ?>&identar=<?= $identar; ?>&tamanho=x-large">
                <button type="submit">Grande</button>
            </a>
        </div>
    </div>

    <p>
        <a href="menu.php">Voltar ao menu de exercícios</a>
    </p>


</body>

</html>