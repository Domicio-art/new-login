<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">

    <title>Sistema de Cadastro</title>
    <link rel="stylesheet" href="_css/estilo.css">

</head>

<body>

    <div class="container">


        <section>
            <h1>Login</h1>
            <hr><br><br>
            <form method="post" action="processa.php">
               
              
                <input type="text" name="usuario" placeholder="Nome" class="campo" maxlength="50" required autofocus><br>

                <input type="text" name="login" placeholder="User" class="campo" maxlength="40" required><br>

                <input type="text" name="senha" placeholder="Senha" class="campo" maxlength="12" required><br>

                <input type="submit" value="Enviar" class="btn">



            </form>
        </section>

    </div>

</body>

</html>