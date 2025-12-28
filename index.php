<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistema Hospitalar</title>

        <!-- INTEGRANDO BOOTSTRAP -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- INTEGRANDO CSS -->
        <link rel="stylesheet" href="css/login.css">

        <!-- FAVICON -->
        <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
        <link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">

    </head>
    <body>
       <div class="login-form">
            <form action="" method="post">
                <div class="logo">
                    <img src="img/logo.jpg" alt="Logo Sistema Hospitalar">
                </div>
                <h2 class="text-center">Acesso ao Sistema</h2>
                <div class="form-group">
                    <input class="form-control" type="email" class="usuario" placeholder="Ensira seu e-mail" required="required">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="senha" placeholder="Senha" required="required">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Entrar</button>
                </div>
                <div class="clearfix">
                    <label type="float-left  checkbox-inline">
                        Lembrar-me
                    </label>
                    <a href="#" class="float-right">Esqueceu a senha?</a>
                    <input type="checkbox">
                </div>
            </form>
       </div>  
    </body>
</html>
