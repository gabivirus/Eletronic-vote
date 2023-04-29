
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script src="codigo.js"></script>
    <title>Urna eletrônica</title>
</head>
<body>
    <form action="dados.php" method="post">
    <div class="urna">
        <div class="tela">
            <section class="info">
                <p>SEU VOTO PARA</p>
                <div class="numDisplay">
                    <input type="text" id="display1" class="display" max="1" size="1" readonly></input>
                    <input type="text" id="display2" class="display" max="1" size="1" readonly></input>
                    <input type="text" id="display3" class="display" max="1" size="1" readonly></input>
                    <input type="text" id="display4" class="display" max="1" size="1" readonly></input>
                    <input type="text" id="display5" class="display" max="1" size="1" readonly></input>
                </div>
                <input type="text" name="number" id="number"></input>
                <!--<p>SEU VOTO PARA</p>
                <h4 name="title" class="titulo">title</h4>
                <h3 name="name" class="nome">name</h3>
                <img name="img" src="" alt="">
                <h3 name="number" class="numero">number</h3>
                <h5 name="party" class="partido">party</h5>-->
            </section>
            <section class="dicas">
                <p>dica</p>
            </section>
        </div>
        <div class="teclado">
            <section class="comandos">
                <input class="btn bold corrige" type="button" onclick="corrige()" value="CORRIGE">
                <input class="btn bold branco" type="button" onclick="branco()" value="BRANCO">
                <input class="btn bold confirma" type="submit" value="CONFIRMA" name="">
            </section>
            <section class="numerico">
                <button class="btn" onclick="digita('1')">1</button>
                <button class="btn" onclick="digita('2')">2</button>
                <button class="btn" onclick="digita('3')">3</button>
                <button class="btn" onclick="digita('4')">4</button>
                <button class="btn" onclick="digita('5')">5</button>
                <button class="btn" onclick="digita('6')">6</button>
                <button class="btn" onclick="digita('7')">7</button>
                <button class="btn" onclick="digita('8')">8</button>
                <button class="btn" onclick="digita('9')">9</button>
                <button class="btn" onclick="digita('0')">0</button>
            </section>
        </div>
        <h3 class="logo">MAGA</h3>
    </div>
    </form>
    <div class="candidatos">
        
    </div>
</body>
</html>