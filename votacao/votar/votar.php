<!DOCTYPE html
<html>
<head>

    <title> Votar</title>
</head>
<body>

    <h1> Votação </h1>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="radio" name="opcao" value="opcao1">Opção 1<br>
        <input type="radio" name="opcao" value="opcao2">Opção 2<br>
        <input type="radio" name="opcao" value="opcao3">Opção 3<br>
        <br>
        <input type="submit" value="Votar">
    </form>


    <h1>Resultados</h1>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $opcao = $_POST['opcao'];
        $arquivo = 'votos.txt';
        $votos = [];

        if (file_exists($arquivo)) {
            $votos = unserialize(file_get_contents($arquivo));
        }

        if (array_key_exists($opcao, $votos)) {
            $votos[$opcao]++;
        } else {
            $votos[$opcao] = 1;
        }

        file_put_contents($arquivo, serialize($votos));
    }

    if (file_exists($arquivo)) {
        $votos = unserialize(file_get_contents($arquivo));
        if (empty($votos)) {
            echo "Nenhum voto foi registrado.";
        } else {
            foreach ($votos as $opcao => $quantidade) {
                echo "Opção {$opcao}: {$quantidade} votos<br>";
            }
        }
    }
    ?>
</body>
</html>
