<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>

    <style>
        body {
            padding: 20px 0 0 30px;
            background-color: #f0f0f0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 20px;
            max-width: 100%;
        }

        .pai {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }


        .filho {
            padding: 30px 50px 20px 20px;
        }

        button {
            box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
            padding: 10px;
            border-radius: 15px;
            margin-top: 10px;
            margin-bottom: 0;
        }

        .enviar {
            background-color: blue;
            color: #f0f0f0;
        }

        .limpar {
            background-color: orange;
        }

        label {
            width: 300px;
            display: inline-block;
            text-align: end;
        }

        button {
            display: inline-block;
        }

        .enviar {
            margin-left: 350px;
        }

        input,
        textarea {
            margin-top: 10px;
            margin-left: 20px;
            width: 300px;
            border: black 1.5px solid;
            border-radius: 3.5px;
            box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
        }

        input {
            height: 25px;
        }

        #cortexto,
        #corfundo {
            width: 305px;
        }

        form {
            line-height: 30px;
        }

        #corpo {
            border: black 1.5px solid;
            border-radius: 5px;
            box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
        }

        .voltar {
            margin-top: 50px;

        }
    </style>
</head>

<body>
    <h1>Exercício 1 - Formulário Gerador de Página</h1>
    <hr>
    <div class="pai">

        <div class="filho">
            <form action="gerado.php" method="POST">
                <label for="titulo">Título da Página: </label>
                <input type="text" name="titulo" id="titulo" required>
                <br>

                <label for="corpo">Corpo : </label>
                <textarea name="corpo" id="corpo" cols="30" rows="3" required></textarea>
                <br>

                <label for="cortexto">Cor do texto: </label>
                <input type="color" name="cortexto" id="cortexto" required>
                <br>

                <label for="urlimagem">URL de uma imagem: </label>
                <input type="url" name="urlimagem" id="urlimagem" required>
                <br>

                <label for="urllink">URL de link: </label>
                <input type="url" name="urllink" id="urllink" required>
                <br>

                <label for="corfundo">Cor de plano de fundo da página: </label>
                <input type="color" name="corfundo" id="corfundo" value="#f0f0f0" required>
                <br>

                <button class="enviar" type="submit" value="submit">Enviar</button>
                <button class="limpar" type="reset" value="reset">Limpar</button>
            </form>
        </div>
    </div>
    <p class="voltar">
        <a href="menu.php">Voltar ao menu de atividades</a>
    </p>
</body>

</html>