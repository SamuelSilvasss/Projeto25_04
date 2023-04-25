<!DOCTYPE html>
<html>
<head>
    <title>Sistema de Votação</title>
</head>
<body>
    <h1>Sistema de Votação</h1>


    <form method="post" action="">

        <label for="opcao1">1°opção</label>
        <input type="radio" name="opcao" value="opcao1" id="opcao1" />
        <br>

        <label for="opcao2">2°opção</label>
        <input type="radio" name="opcao" value="opcao2" id="opcao2" />
        <br>

        <label for="opcao3">3°opção</label>
        <input type="radio" name="opcao" value="opcao3" id="opcao3" />
        <br>
        <br>

        <input type="submit" name="votar" value="Votar" />
        <br>
        
    </form>
    <?php

        $votos = array(
            "opcao1" => 0,
            "opcao2" => 0,
            "opcao3" => 0
        );

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (isset($_POST["opcao"])) {
                $opcao = $_POST["opcao"];

                $votos[$opcao]++;
            }
        }

        echo "<h1>Resultados da Votação</h1>";

        foreach ($votos as $opcao => $voto) {
            echo "<li>$opcao: $voto votos</li>";
        }
        echo "</ul>";
    ?>
</body>
</html>
