<!DOCTYPE html>
<html>
<head>
    <title>Exemplo de IF em PHP Interativo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        .message {
            margin-top: 20px;
            padding: 10px;
            border-radius: 4px;
            text-align: center;
        }

        .success {
            color: green;
        }

        .error {
            color: red;
        }
        .atention{
            color:rgb(227, 128, 19);
        }
    </style>
</head>
<body>

<?php
// Inicializa a variável de idade
$idade = '';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém a idade fornecida pelo usuário do formulário
    $idade = $_POST['idade'];

    if ($idade >= 0 && $idade <= 110){
        if ($idade >= 18) {
            $mensagem = "Você é maior de idade!";
            $classe = "success"; // Classe CSS para mensagem de sucesso
            
            if ($idade >= 60) {
                $mensagem = "Voce é maior de idade e possui mais de 60 anos";
            } 
        } else {
            $mensagem = "Você é menor de idade!";
            $classe = "error"; // Classe CSS para mensagem de erro
        }  
    } else {
        $mensagem = "Insira uma idade valida";    
        $classe = "atention";
    }
    // Verifica a idade e define a mensagem correspondente
   
    
}
?>

<div class="container">
    <h2>Verificador de Idade</h2>
    <!-- Formulário para inserir a idade -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="idade">Insira sua idade:</label>
        <input type="number" id="idade" name="idade" value="<?php echo $idade; ?>" required>
        <button type="submit">Verificar</button>
    </form>

    <!-- Exibe a mensagem na página se o formulário foi enviado -->
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <p class="message <?php echo $classe; ?>"><?php echo $mensagem; ?></p>
    <?php endif; ?>
</div>

</body>
</html>

