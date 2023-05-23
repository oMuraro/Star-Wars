<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Personagens</title>
</head>
<body>
<?php
        $url = "https://swapi.dev/api/people";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $resultado = json_decode(curl_exec($ch));
        //var_dump($result);
        foreach($resultado->results as $ator) {
            echo "<div class='container>'";
            echo "<div class='showAPI'>";
            echo "Nome: " . $ator->name . "<br><br>";
            echo "Altura: " . $ator->height . " cm <br><br>";
            echo "Cor do Cabelo: " . $ator->hair_color . "<br><br>";

            foreach($ator->films as $filme) {
                $url2 = $filme;
                $ch2 = curl_init($url2);
                curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
                $resultadofilme = json_decode(curl_exec($ch2));

                echo "Filme: " . $resultadofilme->title . "<br>";
                
                //echo "Filme: " . $filme . "<br>";
            }
            echo "<br><hr>";
            echo "<div>";
            echo "</div>";
        }
    ?>
</body>