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
         $url = "https://swapi.dev/api/people/";
         $ch = curl_init($url);
         curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

         $resultado = json_decode(curl_exec($ch));

         echo "<a href='index.php'> <button class='voltar'> Voltar </button></a>";

         echo "<div id='container'>";
             echo "<div class='logo'>";
                echo "<img src='imagens/logo.png'>";
            echo "</div>";
             
            foreach($resultado->results as $ator) {
            echo "<div class='escolhaAPI'>";

                echo "<span class='tituloAPI'>" . $ator->name . "</span><br><br>";
                echo "<a href='".$ator->name. ".php'><button class='buttonEscolha'> Saiba Mais </button> </a>";
            echo "</div>";
            }
        echo "</div>";









        // $url = "https://swapi.dev/api/people";
        // $ch = curl_init($url);
        // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // $resultado = json_decode(curl_exec($ch));

        // echo "<a href='index.php'> <button class='voltar'> Voltar </button></a>";

        // echo "<div id='container'>";
        // echo "<div class='logo'>";
        // echo "<img src='imagens/logo.png'>";
        // echo "</div>";
        // foreach($resultado->results as $ator) {
        //     echo "<div class='showPersonagem'>";
        //     echo "<div class='alignPersonagem'>";
        //     echo "<span class='personagemAPI'> Nome: " . $ator->name . "</span><br><br>";
        //     echo "<span class='personagemAPI'> Altura: " . $ator->height . " cm </span><br><br>";
        //     echo "<span class='personagemAPI'> Cor do Cabelo: " . $ator->hair_color . "</span><br><br>";

        //     echo "<span class='personagemAPI'> Filmes Participados:  </span><br>";
        //     foreach($ator->films as $filme) {
        //         $url2 = $filme;
        //         $ch2 = curl_init($url2);
        //         curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);
        //         curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
        //         $resultadofilme = json_decode(curl_exec($ch2));

        //         echo "<span class='personagemAPI'>".$resultadofilme->title."</span><br>";
        //     }
        //     echo "</div>";
        //     echo "<img class='imgPersonagem' src='imagens/".$ator->name.".jpg'>";
        //     echo "</div>";
        //     echo "<br><br>";
        // }
        // echo "</div>";
    ?>
</body>