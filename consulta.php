<?php

include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";
$sql = "select * from usuarios where usuario  like '%$filtro%' order by usuario";
$consulta = mysqli_query($conexao,$sql);
$registros = mysqli_num_rows($consulta);



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">

    <title>Usários cadastrados</title>
    <link rel="stylesheet" href="_css/estilo.css">

</head>

<body>
    <div class="container">

        <section>
            <h1>Consultas</h1>
            <hr><br><br>

            <form method="get" action="">
                Filtrar por Usuário: <input type="text" name="filtro" class="campo" required autofocus>
                <input type="submit" value="pesquisar" class="btn">
                <input type="submit" value="Apagar" class="btn" action="delete"><br>
            </form>

            <?php
                print "Resultado da pesquisa para o usuario <strong>$filtro</strong>:<br><br>";
                print "$registros registros encontrados.";
                print "<br><br>";

                while($exibirRegistros = mysqli_fetch_array($consulta)){

                    $codigo = $exibirRegistros[0];

                    $usuario = $exibirRegistros[1];
                    $login = $exibirRegistros[2];
                    $senha = $exibirRegistros[3];


                    print "<article>";
                    print "$codigo<br>";

                    print "Nome: $usuario<br>";
                    print "Login: $login<br>";
                    print "Senha: $senha<br>";

                    print "</article>";

                }

                mysqli_close($conexao);

                ?>

        </section>

    </div>

</body>

</html>