<!DOCTYPE html>
<html>
    <head>
        <title>LogSys</title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    </head>
    <body>
        <h1>LogSys</h1>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <div class="master">
            <div class="navbar">
                <div class="navbar-inner">
                    <a class="brand" href="#">Inicio</a>
                    <ul class="nav">
                        <li class="active"><a href="index.php">Login</a></li>
                        <li><a href="cadastro.php">Cadastro</a></li>
                        <li><a href="#">Sobre</a></li>
                    </ul>
                </div>
            </div><div class="main">
                <form class="form-horizontal" action="#">
                    <div class="control-group">
                        <label class="control-label" for="inputEmail">Email</label>
                        <div class="controls">
                            <input type="text" id="inputEmail" placeholder="Email">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Senha</label>
                        <div class="controls">
                            <input type="password" id="inputPassword" placeholder="Senha">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <label class="checkbox">
                                <input type="checkbox"> Lembre-se de mim
                            </label>
                            <button type="submit" class="btn">Entrar</button>
                        </div>
                    </div>
                </form>
            </div>  
            
            
        </div>
    </body>
</html>