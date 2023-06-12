<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>CR90 corvette</title>
</head>

<body>
    <a href='naves.php'> <button class='voltar'> Voltar </button></a>

    <div id='container'>
        <div class='logo'>
            <img src='imagens/logo.png'>
        </div>
        <?php
        $url = "https://swapi.dev/api/starships/2/";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $resultado = json_decode(curl_exec($ch));

        echo "<div class='APIescolhida'>";
        echo "<div class='informationAPI'>";
        echo "<span class='textoAPI'> Nome: " . $resultado->name . "</span><br><br>";
        echo "<span class='textoAPI'> Modelo: " . $resultado->model . "</span><br><br>";
        echo "<span class='textoAPI'> Tamanho: " . $resultado->length . "</span><br><br>";
        echo "<span class='textoAPI'> Capacidade de Carga: " . $resultado->cargo_capacity . "</span><br><br>";
        echo "<span class='textoAPI'> Velocidade Máxima: " . $resultado->max_atmosphering_speed. "</span><br><br>";
        echo "<span class='textoAPI'> Tripulação: " . $resultado->crew. "</span><br><br>";
        
        //     echo "<span class='textoAPI'> Filmes Participados:  </span><br>";
        //     foreach($resultado->pilots as $piloto) {
        //         $url1 = $piloto;
        //         $ch1 = curl_init($url1);
        //         curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
        //         curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
        //         $resultado1 = json_decode(curl_exec($ch1));
        //         echo "<span class='textoAPI'>".$resultado1->name."</span><br>";
        //     }
       
        echo "<span class='textoAPI'> Filmes Participados:  </span><br>";
        foreach($resultado->films as $filme) {
            $url2 = $filme;
            $ch2 = curl_init($url2);
            curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
            $resultadofilme = json_decode(curl_exec($ch2));
            echo "<span class='textoAPI'>".$resultadofilme->title."</span><br>";
        }
                echo "</div>";
                echo "<img class='imgPersonagem' src='imagens/".$resultado->name.".jpg'>";
        echo "</div>";
        ?>
    </div>
</body>

</html>