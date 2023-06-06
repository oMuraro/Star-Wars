<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Star Wars</title>
</head>
<body>
    <div class="container">
        <div class="navBar">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="pessoas.php">Personagens</a></li>
                <li><a href="veiculos.php">Veículos</a></li>
                <li><a href="naves.php">Naves</a></li>
                <li><a href="especies.php">Espécies</a></li>
                <li><a href="planetas.php">Planetas</a></li>
                <li><a href="filmes.php">Filmes</a></li>
            </ul>
        </div>

        <center>
        <br><br><br><br><br><br><br><br><br><div class="logo" style="width: 500px; height: 100px;">
            <img src = "imagens/logo.png" style="width:90%;">
        </div>
        </center>
        <div class="main">
            <div class="leftMargin">
                <img class="leftBorder" src="personagem.png">
                <div class="conteudo">
                    <h1 class="mainTitles">Personagens</h1>
                    <p class="textLeft">Conheça os personagens mais iconicos e lendários de todos os filmes da franquia</p>
                    <a href="pessoas.php"><button class="informationLeft"> Saiba Mais </button> </a>
                </div>
            </div>

            <div class="rightMargin">
                <div class="conteudo">
                    <h1 class="mainTitles">Espécies</h1>
                    <p class="textRight">Diferentes espécies de tipos inimagináveis </p>
                    <a href="especies.php"><button class="informationLeft"> Saiba Mais </button></a>
                </div>
                <img class="rightBorder" src="especie.jpeg">
            </div>

            <div class="leftMargin">
                <img class="rightBorder" src="nave.jpg">
                <div class="conteudo">
                    <h1 class="mainTitles">Naves</h1>
                    <p class="textLeft">Naves dos mais curiosos modelos e preços</p>
                    <a href="naves.php"> <button class="informationLeft"> Saiba Mais </button> </a>
                </div>
            </div>

            <div class="rightMargin">
                <div class="conteudo">
                    <h1 class="mainTitles">Filmes</h1>
                    <p class="textRight">Todos os incríveis filmes da franquia Star Wars</p>
                    <a href="filmes.php"> <button class="informationLeft"> Saiba Mais </button> </a>
                </div>
                <img class="rightBorder" src="filme.jpg">
            </div>

            <div class="leftMargin">
                <img class="rightBorder" src="imagens/Bespin.jpg">
                <div class="conteudo">
                    <h1 class="mainTitles">Planetas</h1>
                    <p class="textLeft">Planetas de diferentes sistemas solares</p>
                    <a href="planetas.php"> <button class="informationLeft"> Saiba Mais </button> </a>
                </div>
            </div>

            <div class="rightMargin">
                <div class="conteudo">
                    <h1 class="mainTitles">Veículos</h1>
                    <p class="textRight">Veículos dos mais diferentes formatos e utilidades</p>
                    <a href="veiculos.php"> <button class="informationLeft"> Saiba Mais </button> </a>
                </div>
                <img class="rightBorder" src="imagens/Sand Crawler.jpg">
            </div>

        </div>
    </div>
</body>
</html>