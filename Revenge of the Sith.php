<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Revenge of the Sith</title>
</head>

<body>
    <a href='filmes.php'> <button class='voltar'> Voltar </button></a>

    <div id='container'>
        <div class='logo'>
            <img src='imagens/logo.png'>
        </div>
        <?php
        $url = "https://swapi.dev/api/films/6/";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $resultado = json_decode(curl_exec($ch));

        echo "<div class='APIescolhidaFilme6'>";
        echo "<div class='informationAPI'>";
        echo "<span class='textoAPI'> Título: " . $resultado->title . "</span><br><br>";
        echo "<span class='textoAPI'> Sinopse: " . $resultado->opening_crawl . "</span><br><br>";
        echo "<span class='textoAPI'> Data de Lançamento: " . $resultado->release_date . "</span><br><br>";

        echo "<span class='textoAPI'> Personagens:  </span><br>";
        foreach($resultado->characters as $personagem) {
                    $url1 = $personagem;
                    $ch1 = curl_init($url1);
                    curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
                    $personagem = json_decode(curl_exec($ch1));
                    if($personagem->name != null) {
                        echo "<span class='textoAPI'>".$personagem->name."</span><br>";
                    }
                }
                echo "<br>";

                echo "<br><span class='textoAPI'> Naves:  </span><br>";
                foreach($resultado->starships as $starship) {
                $url2 = $starship;
                $ch2 = curl_init($url2);
                curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
        
                $resultado2 = json_decode(curl_exec($ch2));
                echo "<span class='textoAPI'>" . $resultado2->name . "</span><br>";
                }
                echo "<br>";

                echo "<br><span class='textoAPI'> Planetas:  </span><br>";
                foreach($resultado->planets as $resultado3) {
                $url3 = $resultado3;
                $ch3 = curl_init($url3);
                curl_setopt($ch3, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch3, CURLOPT_RETURNTRANSFER, true);
        
                $resultado3 = json_decode(curl_exec($ch3));
                echo "<span class='textoAPI'>" . $resultado3->name . "</span><br>";
                }
                echo "<br>";

                echo "<br><span class='textoAPI'> Veículos:  </span><br>";
                foreach($resultado->vehicles as $resultado4) {
                $url4 = $resultado4;
                $ch4 = curl_init($url4);
                curl_setopt($ch4, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch4, CURLOPT_RETURNTRANSFER, true);
        
                $resultado4 = json_decode(curl_exec($ch4));
                echo "<span class='textoAPI'>" . $resultado4->name . "</span><br>";
                }
                echo "<br>";

                echo "<br><span class='textoAPI'> Espécies:  </span><br>";
                foreach($resultado->species as $resultado5) {
                $url5 = $resultado5;
                $ch5 = curl_init($url5);
                curl_setopt($ch5, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch5, CURLOPT_RETURNTRANSFER, true);
        
                $resultado5 = json_decode(curl_exec($ch5));
                echo "<span class='textoAPI'>" . $resultado5->name . "</span><br>";
                }
                echo "</div>";
                echo "<img class='imgPersonagem' src='imagens/".$resultado->title.".jpg'>";
        echo "</div>";
        ?>
    </div>
</body>

</html>