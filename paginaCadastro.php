<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Cadastro</title>
</head>
<body>
    <?php include 'cadastro.php'; ?>
    <form method="POST">
        <label>CPF: </label>
        <input type="text" name="tCPF" id="tCPF"/>
        <br><br>

        <label>Nome: </label>
        <input type="text" name="tNome" id="tNome"/>
        <br><br>

        <label>Telefone: </label>
        <input type="text" name="tTelefone" id="tTelefone"/>
        <br><br>

        <label>Endereço: </label>
        <input type="text" name="tEndereco" id="tEndereco"/>
        <br><br>

        <label>Cidade: </label>
        <input type="text" name="tCidade" id="tCidade"/>
        <br><br>



        <button> Cadastrar 
        <?php

            //Passe o Dado para o construtor
            function consultarObjeto()
            {
                $cpf = $_POST['tCPF'];
                $nome = $_POST['tNome'];
                $telefone = $_POST['tTelefone'];
                $endereco = $_POST['tEndereco'];
                $cidade = $_POST['tCidade'];

                $cad = new Cadastro($cpf, $nome, $telefone, $endereco, $cidade);
                return $cad;
            }//Fim do Método

        ?>
        </button>
    </form>
    
    <?php
        echo consultarObjeto()->imprimir();
    ?>
</body>
</html>