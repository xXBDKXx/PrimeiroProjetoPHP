<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir</title>
</head>
<body>
    <form>
        <button> Excluir 
            <?php 
                session_start();
                session_destroy();
            ?>
        </button>

        <button> <a href="index.php"> Voltar </a></button>
    </form>
</body>
</html>