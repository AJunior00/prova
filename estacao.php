<?php

    abstract class robos{

    public $nome;
    public $modelo;
    private $energia;
    private $potencia;
    public $funcao;
    }

    function __contruct() {
        
    }

    class Explorador {

        new Personagem Explorador("Joao", 100, 20, $funcao)
    }
    class Engenheiro {

        new Personagem Engenheiro("junior", 120, 15, $funcao)
        
    }
    class Defensor {

        new Personagem Defensor("luiz", 150, 30, $funcao)
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nome do robo <?$nome?></h1>
    <h2>Modelo do robo <?$modelo?></h2>
    <h2>Nome do operador: Junior</h2>
</body>
</html>