<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de While em PHP Interativo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            max-width: 600px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ccc;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e0e0e0;
        }

        .form-container {
            text-align: center;
            margin-bottom: 20px;
        }

        input[type="number"] {
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        button {
            padding: 10px 20px;
            border-radius: 4px;
            border: none;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .restart-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="form-container">
            <h2>Gerador de Números</h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <label for="limite">Limite Superior:</label>
                <input type="number" id="limite" name="limite" min="1" max="400"><br>
                <label for="alcance">Alcance</label>
                <input type="number" id="alcance" name="alcance" min="1" max="400"><br>
                <button type="submit" id="GA">Gerar alcance</button>
                <button type="submit" id="GT">Gerar Tabela</button>
            </form>
        </div>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
            <?php
            $alcance = $_POST['alcance'];
            $limite = $_POST['limite'];
            $i = 1;
            $j = 0;
            ?>
            <table>
                <thead>
                    <tr>
                        <th>Número</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Loop while para gerar números até o limite especificado
                    while ($i <= $limite) {
                        echo "<tr><td>$i</td></tr>";
                        $i++;
                    }
                    ?>
                </tbody>

            
            </table>
            <table>
                <thead>
                    <tr>
                        <th>Alcance</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Loop while para gerar números até o limite especificado
                    while ($j <= $limite) {
                        echo "<tr><td>$j</td></tr>";
                        $j++;
                    }
                    ?>
                </tbody>
            </table>
            <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="restart-link">Gerar outra tabela</a>
        <?php endif; ?>

    </div>

</body>

</html>