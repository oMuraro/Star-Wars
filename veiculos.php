<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Veículos</title>
</head>
<body>
    <?php
         $url = "https://swapi.dev/api/vehicles";
         $ch = curl_init($url);
         curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
         $resultado = json_decode(curl_exec($ch));
 
         echo "<a href='index.php'> <button class='voltar'> Voltar </button></a>";

         echo "<div id='container'>";
             echo "<div class='logo'>";
                echo "<img src='imagens/logo.png'>";
            echo "</div>";
             
            foreach($resultado->results as $veiculo) {
            echo "<div class='escolhaAPI'>";

                echo "<span class='tituloAPI'>" . $veiculo->name . "</span><br><br>";
                if ($veiculo->name == "TIE/LN starfighter") {
                    echo "<a href='TIE fighter.php'><button class='buttonEscolha'> Saiba Mais </button> </a>";
                } else {
                    echo "<a href='".$veiculo->name. ".php'><button class='buttonEscolha'> Saiba Mais </button> </a>";
                }
            echo "</div>";
            }
        echo "</div>";



        //  echo "<a href='index.php'> <button class='voltar'> Voltar </button></a>";
 
        //  echo "<div id='container'>";
        //  echo "<div class='logo'>";
        //  echo "<img src='imagens/logo.png'>";
        //  echo "</div>";
        //  foreach($resultado->results as $veiculo) {
        //      echo "<div class='showPersonagem'>";
        //      echo "<div class='alignPersonagem'>";
        //      echo "<span class='personagemAPI'> Nome: " . $veiculo->name . "</span><br><br>";
        //      echo "<span class='personagemAPI'> Modelo " . $veiculo->model . " </span><br><br>";
        //      echo "<span class='personagemAPI'> Tamanho: " . $veiculo->length . "</span><br><br>";
        //      echo "<span class='personagemAPI'> Velocidade Máxima: " . $veiculo->max_atmosphering_speed . "</span><br><br>";
        //      echo "<span class='personagemAPI'> Capacidade de Carga: " . $veiculo->cargo_capacity . "</span><br><br>";
 
        //      echo "<span class='personagemAPI'> Filmes Participados:  </span><br>";
        //      foreach($veiculo->films as $filme) {
        //          $url2 = $filme;
        //          $ch2 = curl_init($url2);
        //          curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);
        //          curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
        //          $resultadofilme = json_decode(curl_exec($ch2));
 
        //          echo "<span class='personagemAPI'>".$resultadofilme->title."</span><br>";
        //      }
        //      echo "</div>";
        //      if ($veiculo->name == 'TIE/LN starfighter') {
        //         echo "<img class='imgPersonagem' src='imagens/".$veiculo->max_atmosphering_speed.".jpg'>";
        //      } else {
        //          echo "<img class='imgPersonagem' src='imagens/".$veiculo->name.".jpg'>";
        //      }
        //      echo "</div>";
        //      echo "<br><br>";
        //  }
        //  echo "</div>";
    ?>
</body>
</html>