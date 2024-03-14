<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de ElseIf em PHP Interativo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            display: block;
        }

        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .message {
            margin-top: 20px;
            padding: 10px;
            border-radius: 4px;
            text-align: center;
        }

        .beginner {
            color: blue;
        }

        .intermediate {
            color: orange;
        }

        .advanced {
            color: green;
        }

        .profissional {
            color:rgb(190,34,34);
            -webkit-text-stroke-width: 0.5px; /* largura da borda */
            -webkit-text-stroke-color: rgb(139,0,0); /* cor da borda */

        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Selecione seu Nível de Habilidade</h2>
        <div class="form-group">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <label for="nivel">Nível de Habilidade:</label>
                <select id="nivel" name="nivel">
                    <option value="iniciante">Iniciante</option>
                    <option value="intermediario">Intermediário</option>
                    <option value="avancado">Avançado</option>
                    <option value="profissional">Profissional</option>
                </select>
                <button type="submit">Verificar</button>
            </form>
        </div>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nivel_habilidade = $_POST['nivel'];

            if ($nivel_habilidade == "iniciante") {
                $mensagem = "Você é um jogador iniciante. Continue praticando!";
                $classe = "beginner";
            } elseif ($nivel_habilidade == "intermediario") {
                $mensagem = "Você está melhorando! Continue assim!";
                $classe = "intermediate";
            } elseif ($nivel_habilidade == "avancado") {
                $mensagem = "Você é um jogador avançado. Parabéns!";
                $classe = "advanced";
            } elseif ($nivel_habilidade == "profissional") {
                $mensagem = "Você é excepcional! Parabéns";
                $classe = "profissional";
            } else {
                $mensagem = "Seu nível de habilidade não foi reconhecido.";
                $classe = "error";
            }
        ?>

            <div class="message <?php echo $classe; ?>">
                <?php echo $mensagem; ?>
            </div>
        <?php } ?>
    </div>

</body>

</html>