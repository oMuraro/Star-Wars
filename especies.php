<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Espécies</title>
</head>
<body>
<?php
        $url = "https://swapi.dev/api/species";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $resultado = json_decode(curl_exec($ch));

        echo "<a href='index.php'> <button class='voltar'> Voltar </button></a>";

        echo "<div id='container'>";
        echo "<div class='logo'>";
        echo "<img src='imagens/logo.png'>";
        echo "</div>";
        foreach($resultado->results as $especie) {
            echo "<div class='showPersonagem'>";
            echo "<div class='alignPersonagem'>";
            echo "<span class='personagemAPI'> Nome: " . $especie->name . "</span><br><br>";
            echo "<span class='personagemAPI'> Altura Média: " . $especie->average_height . " cm </span><br><br>";
            echo "<span class='personagemAPI'> Cores do Cabelo: " . $especie->hair_colors . "</span><br><br>";
            echo "<span class='personagemAPI'> Espectativa de Vida: " . $especie->average_lifespan . "</span><br><br>";

            $url2 = $especie->homeworld;
            $ch2 = curl_init($url2);
            curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
            $resultadocasa = json_decode(curl_exec($ch2));

            if ($especie->name == "Droid") {
                echo "<span class='personagemAPI'> Planeta Natal: N/A</span><br><br>";

            } else {
                echo "<span class='personagemAPI'> Planeta Natal: " . $resultadocasa->name . "</span><br><br>";
            }

            echo "<span class='personagemAPI'> Personagens Pertencentes:  </span><br>";
            foreach($especie->people as $pessoas) {
                $url3 = $pessoas;
                $ch3 = curl_init($url3);
                curl_setopt($ch3, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch3, CURLOPT_RETURNTRANSFER, true);
                $resultadopessoas = json_decode(curl_exec($ch3));

                echo "<span class='personagemAPI'>".$resultadopessoas->name."</span><br>";
            }
            echo "</div>";
            if ($especie->name == "Yoda's species") {
                echo "<img class='imgPersonagem' src='imagens/".$especie->average_lifespan.".jpg'>";
            } else {
                echo "<img class='imgPersonagem' src='imagens/".$especie->name.".jpg'>";
            }
            echo "</div>";
            echo "<br><br>";
        }
        echo "</div>";
    ?>
</body>