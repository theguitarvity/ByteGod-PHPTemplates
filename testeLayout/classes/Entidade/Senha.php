<?php

/**
 * Description of Senha
 *
 * @copyright (c) 2015, ByteGod IT solutions - todos os direitos reservados
 */
class Senha {
    //put your code here
    
    private $us_code;
    private $us_senha;
    
    function getUs_code() {
        return $this->us_code;
    }

    function getUs_senha() {
        return $this->us_senha;
    }

    function setUs_code($us_code) {
        $this->us_code = $us_code;
    }

    function setUs_senha($us_senha) {
        $this->us_senha = $us_senha;
    }


}
