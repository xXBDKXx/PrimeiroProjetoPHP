<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar</title>
</head>
<body>
    <?php 
    function atualizar($opcao, $dado)
    {
        switch($opcao)
        {
            case 1:
                $_SESSION['nome'] = $dado;
                return "Atualizado Nome";
                break;
            case 2:
                $_SESSION['telefone'] = $dado;
                return "Atualizado Telefone";
                break;
            case 3:
                $_SESSION['endereco'] = $dado;
                return "Atualizado Endereco";
                break;
            case 4:
                $_SESSION['cidade'] = $dado;
                return "Atualizado Cidade";
                break;
            default:
                return "Opção escolhida não é válida";
        }//Fim da Escolha
    }//Fim do Metodo
    ?>

    <form method="POST">
        <label>Escolha o Campo que deseja atualizar: </label>
        <select name="opcao" id="opcao">
            <option value="0"></option>
            <option value="1">Nome</option>
            <option value="2">Telefone</option>
            <option value="3">Endereço</option>
            <option value="4">Cidade</option>
        </select>
        <br><br>

        <Label>Dado: </Label>
        <input type="text" id="dado" name="dado"/>

        <button> Atualizar
            <?php
                session_start();
                $opcao = $_POST['opcao'];
                $dado = $_POST['dado'];
            ?>
        </button>

        <?php 
            echo atualizar($opcao, $dado);
        ?>

        <button> <a href="index.php"> Voltar </a></button>
    </form>    
</body>
</html>