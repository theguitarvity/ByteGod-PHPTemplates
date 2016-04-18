<?php

/**
 * Description of senhaDAO
 *
 * @copyright (c) 2015, ByteGod IT solutions - todos os direitos reservados
 */
require_once("Conexao.php");

class senhaDAO {

    //put your code here
    function __construct() {
        $this->con = new Conexao();
        $this->pdo = $this->con->Connect();
    }

    function cadastrar(Senha $senha) {
        try{
            $cad = $this->pdo->prepare("INSERT INTO senha (us_senha,usuario_us_code) VALUES(:us_senha,us_code)");
            $param = array(
                ":us_senha"=>  md5($senha->getUs_senha()),
                ":us_code" =>$senha->getUs_code()
            );
            return $cad->execute($param);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

}
