<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <title>My System</title>
    </head>
    <body>
        <div class="row">
            <h3 class="text-center"><b>LOGIN</b></h3>
            <div class="col-md-4 col-md-offset-4">
                <form name="login" method="post" action="login.php">
                    <div class="form-group">
                        <label>Usuario</label>
                        <input type="text" name="usuario" class="form-control" placeholder="Usuario">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="senha" class="form-control" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-forward"></span>  Enviar</button>
                </form>
            </div>
        </div>
    </body>
</html>
