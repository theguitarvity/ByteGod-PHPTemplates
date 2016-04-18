<?php

/**
 * Description of usuarioDAO
 *
 * @copyright (c) 2015, ByteGod IT solutions - todos os direitos reservados
 */


require_once("Conexao.php");
class usuarioDAO {
    //put your code here
    function __construct() {
        $this->con = new Conexao();
        $this->pdo = $this->con->Connect();
    }

    function cadastrar(Usuario $entUsuario) {
        try {
            $stmt = $this->pdo->prepare("INSERT INTO usuario(us_nome,us_email,us_sexo,us_data,us_hora,us_ip) VALUES (:us_nome, :us_email, :us_sexo, :us_data, :us_hora, :us_ip)");
            $param = array(
                ":us_nome" => $entUsuario->getUs_nome(),
                ":us_email" => $entUsuario->getUs_email(),
                ":us_sexo" => $entUsuario->getUs_sexo(),
                ":us_data" => date("Y/m/d"),
                ":us_hora" => date("h:i:s"),
                ":us_ip" => $_SERVER["REMOTE_ADDR"]
            );

            return $stmt->execute($param);
        } catch (PDOException $ex) {
            echo "ERRO 01: {$ex->getMessage()}";
        }
    }
}
?>