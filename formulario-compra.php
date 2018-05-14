<?php
?>

<!DOCTYPE doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
                <title>
                    Signin Template for Bootstrap
                </title>
                <!-- Bootstrap core CSS -->
                <link crossorigin="anonymous" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" rel="stylesheet">
                    <!-- Custom styles for this template -->
                    <link href="css/login-custom.css" rel="stylesheet">
                    </link>
                </link>
            </meta>
        </meta>
    </head>
    <body class="text-center">
        <form action="ValidarUsuario.php" class="form-signin" method="POST">
            <h1 class="h3 mb-3 font-weight-normal">
                Please sign in
            </h1>
            <input autofocus="" class="form-control" name="username" placeholder="UserName" required="" type="text">
                <input class="form-control" name="password" placeholder="Password" required="" type="password">
                    <button class="btn btn-lg btn-primary btn-block" type="submit">
                        Sign in
                    </button>
                    <p class="mt-5 mb-3 text-muted">
                        � 2017-2018
                    </p>
                </input>
            </input>
        </form>
    </body>
</html>


