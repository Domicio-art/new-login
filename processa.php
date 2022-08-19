<?php

include_once("conexao.php");

$nome = $_POST['usuario'];
$email = $_POST['login'];
$telefone = $_POST['senha'];


$sql = "insert into usuarios (usuario,login,senha) values ('$usuario','$login',$senha)";
$cadastrar = mysqli_query($conexao,$sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">

    <title>Sistema de Cadastro</title>
    <link rel="stylesheet" href="styles/style.css">

</head>

<body>
    <div class="container">

        <section>
            <h1>Confirmação de Cadastro</h1>
            <hr><br><br>

            <?php

                if ($linhas ==1){
                    print "Cadastro efetuado com sucesso!";
                }else{
                    print "Cadastro não efetuado. <br> Já existe um usuário com este email!";
                }
                ?>

        </section>

    </div>

</body>

</html>