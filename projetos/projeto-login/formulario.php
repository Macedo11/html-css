<?php

    if(isset($_POST['submit']))
    {
        print_r('Nome: '.$_POST['email']);
        print_r('<br>');
        print_r('Senha: '.$_POST['password']);
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="shortcut icon" href="./image/koalas-icone.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/mq.css">
</head>
<body>
    <main>
        <div class="container">
            <div class="div-img"></div>
            <form action="formulario.php" method="POST" class="div-login">
                <h1>Login</h1>
                <p>
                    Seja bem-vindo(a) novamente. Faça login para acessar sua conta e fazer as configurações do seu ambiente.
                </p>
                <fieldset>
                    <span class="material-symbols-outlined icon">
                        person
                    </span>
                    <label for="email"></label>
                    <input type="email" name="email" id="email" placeholder="Digite seu Email">
                </fieldset>
                <fieldset>
                    <span class="material-symbols-outlined icon">
                        key
                    </span>
                    <label for="password"></label>
                    <input type="password" name="password" id="password" placeholder="Digite sua senha">
                </fieldset>
                <input type="submit" name="submit" value="Enviar" class="btn-enviar">
                <input type="button" value="Esqueci minha senha" class="btn-esqueci">               
            </form>
        </div>
    </main>
</body>
</html>