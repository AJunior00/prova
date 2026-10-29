<?php

        if(!isset($_SESSION['total_recargas'])){
            $_SESSION['total_recargas'] = 0;
        }
    
     class robos{

    private $nome;
    private $modelo;
    private $energia;
    private $potencia;
    

    public function __contruct($nome, $modelo) {
        $this->$nome = $nome;
        $this->$modelo = $modelo;
        $this->definirAtributos();
    }

    public function definirAtributosIniciais() {

        switch($this->modelo){
            case 'Explorador':
                
                $this->energia = 100;
                $this->potencia = 20;
                break;

                case 'Engenheiro':
                    
                    $this->energia = 120;
                    $this->potencia = 15;
                    break;
                    case 'Defensor': 
                        
                        $this->energia = 150;
                        $this->potencia = 30;
                        break;
                    }
                }

                public function exibirStatus()

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

    if($_SERVER['REQUEST_METHOD'] === 'POST' &&
    isset($_POST['cadastrar'])){
        $nome = trim($_POST['nome'] ?? '');
        $modelo = trim($_POST['modelo'] ?? '');
        $operador = trim($_POST['operador'] ?? '');

        if (empty($nome) || empty($modelo) || empty ($operador))
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova</title>
</head>
<body>
    <header>
        <h1> de robos</h1>
    </header>
    
        <form method="$_POST">
            <div>

                <label>Escolha do robo</label>
                <form type="text" id="nome" name="nome" required>Nome do robo</form>
            </div>
            <div>
                <label>Modelo do robo</label>
                <input type="text" name="nome" required>
                <select name="modelo" required>
                    <option value="">Selecione o modelo</option>
                    <option value="Explorador">Explorador (Energia: 100 | Potencia: 20)</option>
                    <option value="Engenheiro">Engenheiro (Energia: 120 | Potencia: 15)</option>
                    <option value="Defensor">Defensor (Energia: 150 | Potencia: 30)</option>
                </select>
            </div>
            <div>
                <label>Nome do Operador</label>
                <form type="text" id="operador" name="operador" required>Nome do operador</form>
            </div>

            <button type="submit">Cadastrar</button>
        </form>
    
        
</body>
</html>