<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Planetas</title>
</head>
<body>
<?php
        $url = "https://swapi.dev/api/planets";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $resultado = json_decode(curl_exec($ch));

        echo "<a href='index.php'> <button class='voltar'> Voltar </button></a>";

        echo "<div id='container'>";
        echo "<div class='logo'>";
        echo "<img src='imagens/logo.png'>";
        echo "</div>";
        foreach($resultado->results as $planeta) {
            echo "<div class='showPersonagem'>";
            echo "<div class='alignPersonagem'>";
            echo "<span class='personagemAPI'> Nome: " . $planeta->name . "</span><br><br>";
            echo "<span class='personagemAPI'> Diâmetro: " . $planeta->diameter . " </span><br><br>";
            echo "<span class='personagemAPI'> Clima: " . $planeta->climate . "</span><br><br>";
            echo "<span class='personagemAPI'> Terreno: " . $planeta->terrain . "</span><br><br>";
            echo "<span class='personagemAPI'> População: " . $planeta->population . "</span><br><br>";

            echo "<span class='personagemAPI'> Residentes:  </span><br>";
            foreach($planeta->residents as $residente) {
                $url2 = $residente;
                $ch2 = curl_init($url2);
                curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
                $resultadoresidente = json_decode(curl_exec($ch2));

                echo "<span class='personagemAPI'>".$resultadoresidente->name."</span><br>";
            }
            echo "<span class='personagemAPI'> Filmes Participados:  </span><br>";
            foreach($planeta->films as $filme) {
                $url3 = $filme;
                $ch3 = curl_init($url3);
                curl_setopt($ch3, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch3, CURLOPT_RETURNTRANSFER, true);
                $resultadofilme = json_decode(curl_exec($ch3));

                echo "<span class='personagemAPI'>".$resultadofilme->title."</span><br>";
            }
            echo "</div>";
            echo "<img class='imgPersonagem' src='imagens/".$planeta->name.".jpg'>";
            echo "</div>";
            echo "<br><br>";
        }
        echo "</div>";
    ?>
</body>