<?php
    require_once("classes/DAO/usuarioDAO.php");
    require_once("classes/Entidade/Usuario.php") ;
    $dao = new usuarioDAO();
    $user = new Usuario();
    
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>LogSys</title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <script type="text/javascript" src="js/script.js"></script>
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
                        <li><a href="index.php">Login</a></li>
                        <li class="active"><a href="#">Cadastro</a></li>
                        <li><a href="#">Sobre</a></li>
                    </ul>
                </div>       
            </div>
            <div class="main">
                <form class="form-horizontal" method="post" action="#">
                    <div class="control-group">
                        <label class="control-label" for="inputNome">Nome Completo</label>
                        <div class="controls">
                            <input type="text" id="inputNome" placeholder="Nome Completo" name="nome"></input>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputEmail">E-mail</label>
                        <div class="controls">
                            <input type="text" id="inputEmail" placeholder="E-mail" name="email"></input>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputSex">Sexo</label>
                        <div class="controls">
                            <select id="slctSex" name="sex">
                                <option>Escolha</option>
                                <option>Masculino</option>
                                <option>Feminino</option>
                            </select>
                        </div>

                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputSenha">Senha</label>
                        <div class="controls">
                            <input onKeyUp="validarSenha('senha', 'confirmaSenha', 'resultadoCadastro');" type="password" name="senha" id="senha"></input>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputSenhaConf">Confirme a senha</label>
                        <div class="controls">
                            <input onKeyUp="validarSenha('senha', 'confirmaSenha', 'resultadoCadastro');" type="password" name="confirmaSenha"></input>
                        </div>
                    </div>
                    
                    <p id="resultadoCadastro" style="font-weight: bold;">&nbsp;</p>
                    <div class="control-group">
                        <div class="controls">
                            <input type="submit" value="Cadastrar" class="btn btn-success" name="btn_cad"></input>
                        </div>
                    </div>


            </div>

        </form>    
    </div>
            
</div>
</body>
</html>

<?php
    if(isset($_POST['btn_cad'])){
         $user->setUs_nome($_POST['nome']);
         $user->setUs_email($_POST['email']);
         $user->setUs_sexo($_POST['sex']);
         
         if($dao->cadastrar($user)){
             echo "<script>alert('OK');</script>";
         }
         else{
             echo "<script>alert('ERRO');</script>";
         }
         
    }
?>