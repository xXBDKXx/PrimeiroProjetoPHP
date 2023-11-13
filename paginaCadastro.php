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
            session_start();
            //Passe o Dado para o construtor
            $_SESSION['cpf']      = $_POST['tCPF'];
            $_SESSION['nome']     = $_POST['tNome'];
            $_SESSION['telefone'] = $_POST['tTelefone'];
            $_SESSION['endereco'] = $_POST['tEndereco'];
            $_SESSION['cidade']   = $_POST['tCidade'];

            echo 'Dados Cadastrados!!' 
        ?>
        </button>
        <button> <a href="index.php"> Voltar </a></button>
    </form>
</body>
</html>