<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar</title>
</head>
<body>
    <?php 
          include 'cadastro.php';

          session_start();
          $cpf      = $_SESSION['cpf'];
          $nome     = $_SESSION['nome'];
          $telefone = $_SESSION['telefone'];
          $endereco = $_SESSION['endereco'];
          $cidade   = $_SESSION['cidade'];

          $cad = new Cadastro($cpf, $nome, $telefone, $endereco, $cidade);
          echo $cad->imprimir();
    ?>
    <br><br>
    <form method="POST">
        <button> <a href="index.php"> Voltar </a></button>
    </form>
</body>
</html>