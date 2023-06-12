<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>R5-D4</title>
</head>

<body>
    <a href='pessoas.php'> <button class='voltar'> Voltar </button></a>

    <div id='container'>
        <div class='logo'>
            <img src='imagens/logo.png'>
        </div>
        <?php
        $url = "https://swapi.dev/api/people/8/";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $resultado = json_decode(curl_exec($ch));

        echo "<div class='APIescolhida'>";
        echo "<div class='informationAPI'>";
        echo "<span class='textoAPI'> Nome: " . $resultado->name . "</span><br><br>";
        echo "<span class='textoAPI'> Altura: " . $resultado->height . " cm </span><br><br>";
        echo "<span class='textoAPI'> Cor do Cabelo: " . $resultado->hair_color . "</span><br><br>";

        $url1 = $resultado->homeworld;
        $ch1 = curl_init($url1);
        curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);

        $resultado1 = json_decode(curl_exec($ch1));

        echo "<span class='textoAPI'> Planeta Natal: " . $resultado1->name . "</span><br><br>";

        echo "<span class='textoAPI'> Filmes Participados:  </span><br>";
        foreach($resultado->films as $filme) {
                    $url2 = $filme;
                    $ch2 = curl_init($url2);
                    curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
                    $resultadofilme = json_decode(curl_exec($ch2));
                    echo "<span class='textoAPI'>".$resultadofilme->title."</span><br>";
                }
                echo "<br>";
                // echo "<span class='textoAPI'> Naves Pertencentes:  </span><br>";
                // foreach($resultado->starships as $starship) {
                // $url3 = $starship;
                // $ch3 = curl_init($url3);
                // curl_setopt($ch3, CURLOPT_SSL_VERIFYPEER, false);
                // curl_setopt($ch3, CURLOPT_RETURNTRANSFER, true);
        
                // $resultado3 = json_decode(curl_exec($ch3));
                // echo "<span class='textoAPI'>" . $resultado3->name . "</span><br>";
                // }
                echo "</div>";
                echo "<img class='imgPersonagem' src='imagens/".$resultado->name.".jpg'>";
        echo "</div>";
        ?>
    </div>
</body>

</html>