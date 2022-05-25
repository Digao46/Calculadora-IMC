<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado IMC</title>

    <link rel="stylesheet" href="style.css">
    <style>
        body {
            color: rgb(69, 69, 69);
        }

        section {
            height: 100%;
            width: 100%;
            padding: 15% 0 0 20%;
        }

        .results {
            font-size: 22px;
            margin: 0 0 0 0;
            padding: 15px 0 0 15px;
            width: 60%;
            height: 25%;
            border: solid 2px black;
        }

        .results p {
            text-align: center;
        }

        button {
            width: 20%;
            height: 5%;
            margin: 10px 0 0 40%;
            border-radius: 20px;
            text-align: center;
        }

        a {
            color: white;
            text-decoration: none;
            padding: 0 10px 0 0;
        }

        a:hover {
            color: red;
        }
    </style>
</head>

<body>
    <?php
    $weight = $_POST["weightArea"];
    $height = $_POST["heightArea"];
    $imcValue = calcIMC($weight, $height);
    $classification = classIMC($imcValue);

    function calcIMC($weight, $height)
    {
        $imc = $weight / ($height * $height);
        return number_format($imc, 2, ',');
    };


    function classIMC($imcValue)
    {

        if ($imcValue >= 0 && $imcValue <= 16) {
            return "<p>Seu IMC é <b>" . $imcValue . "</b> e você está classificado em <b>Magreza grau III</b>!</p>";
        } else if ($imcValue >= 16 && $imcValue <= 16.9) {
            return "<p>Seu IMC é <b>" . $imcValue . "</b> e você está classificado em <b>Magreza grau II</b>!</p>";
        } else if ($imcValue >= 17 && $imcValue <= 18.4) {
            return "<p>Seu IMC é <b>" . $imcValue . "</b> e você está classificado em <b>Magreza grau I</b>!<p>";
        } else if ($imcValue >= 18.5 && $imcValue <= 24.9) {
            return "<p>Seu IMC é <b>" . $imcValue . "</b> e você está classificado em <b>Peso Adequado</b>!<p>";
        } else if ($imcValue >= 25 && $imcValue <= 29.9) {
            return "<p>Seu IMC é <b>" . $imcValue . "</b> e você está classificado em <b>Pré Obeso</b>!<p>";
        } else if ($imcValue >= 30 && $imcValue <= 34.9) {
            return "<p>Seu IMC é <b>" . $imcValue . "</b> e você está classificado em <b>Obesidade grau I</b>!<p>";
        } else if ($imcValue >= 35 && $imcValue <= 39.9) {
            return "<p>Seu IMC é <b>" . $imcValue . "</b> e você está classificado em <b>Obesidade grau II</b>!<p>";
        } else {
            return "<p>Seu IMC é <b>" . $imcValue . "</b> e você está classificado em <b>Obesidade grau III</b>!<p>";
        }
    }
    ?>

    <header>
        <h1>Calculadora IMC - Resultado</h1>
    </header>

    <section>
        <div class="results">
            <p><b> Peso informado: </b> <?= $weight ?>kg</p>
            <p><b> Altura informada: </b> <?= number_format($height, 2, ",") ?>m</p>
            <p><?= $classification ?></p>
        </div>

        <button>
            <a href="index.html">
                <-- Voltar</a>
        </button>
    </section>

    <footer>
        <p><a href="https://www.facebook.com/diogo.melo.9275439/">Desenvolvido por Dig❤️o</a></p>
    </footer>
</body>

</html>