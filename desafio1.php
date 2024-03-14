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

<div class="container">
    <h2>Verificador de Idade</h2>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="altura">Insira sua altura </label>
        <input type="text" id="altura" name="altura" required>
        <label for="peso">Insira seu peso: </label>
        <input type="text" id="peso" name="peso"  required>
        <button type="submit">Calcular</button>
    </form>

   
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        $peso = $_POST['peso'];
        $peso = floatval($peso);
        $altura = $_POST['altura'];
        $imcS = $peso/($altura*$altura);
        


        if ($imcS <= 18.5){
            $mensagem = "com peso abaixo do normal";
            $classe = 'abaixo';
        } elseif ($imcS >= 18.6 && $imcS <= 24.9){
            $mensagem = "com peso normal";
            $classe = 'normal';
        } elseif ($imcS >= 25 && $imcS <= 29.9){
            $mensagem = "com peso sobrepeso";
            $classe = 'sobrepeso';
        } elseif ($imcS > 30){
            $mensagem = "com obesidade";
            $classe = 'obeso';
        } else {
            $mensagem = "valor nao valido, verifique as informações";
        }

        echo "Seu imc é de: ". number_format($imcS,2). " e você esta ".$mensagem;

    }
    
        
        
        
    ?>
    
    
</div>

</head>
<body>