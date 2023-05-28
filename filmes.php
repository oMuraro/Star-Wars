<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Filmes</title>
</head>
<body>
<?php
        $url = "https://swapi.dev/api/films";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $resultado = json_decode(curl_exec($ch));

        echo "<a href='index.php'> <button class='voltar'> Voltar </button></a>";

        echo "<div id='container'>";
        echo "<div class='logo'>";
        echo "<img src='imagens/logo.png'>";
        echo "</div>";
        foreach($resultado->results as $filme) {
            echo "<div class='showPersonagem'>";
            echo "<div class='alignPersonagem'>";
            echo "<span class='personagemAPI'> Nome: " . $filme->title . "</span><br><br>";
            echo "<span class='personagemAPI'> Sinópse: " . $filme->opening_crawl . " </span><br><br>";
            echo "<span class='personagemAPI'> Episódio: " . $filme->episode_id . "</span><br><br>";

            echo "<span class='personagemAPI'> Personagens:  </span><br>";
            foreach($filme->characters as $personagem) {
                $url2 = $personagem;
                $ch2 = curl_init($url2);
                curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
                $resultadopersonagem = json_decode(curl_exec($ch2));

                echo "<span class='personagemAPI'>".$resultadopersonagem->name."</span><br>";
            }

            // echo "<span class='personagemAPI'> Planetas:  </span><br>";
            // foreach($filme->planets as $planeta) {
            //     $url3 = $planeta;
            //     $ch3 = curl_init($url3);
            //     curl_setopt($ch3, CURLOPT_SSL_VERIFYPEER, false);
            //     curl_setopt($ch3, CURLOPT_RETURNTRANSFER, true);
            //     $resultadoplaneta = json_decode(curl_exec($ch3));

            //     echo "<span class='personagemAPI'>".$resultadoplaneta->name."</span><br>";
            // }

            echo "<span class='personagemAPI'> Data de Lançamento: " . $filme->release_date. "</span><br><br>";


            echo "</div>";
            echo "<img class='imgPersonagem' src='imagens/".$filme->title.".jpg'>";
            echo "</div>";
            echo "<br><br>";
        }
        echo "</div>";
    ?>
</body>