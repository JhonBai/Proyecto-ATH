<?php

/**
 * Description of ClienteController
 *
 * @author APRENDIZ
 */
class ClienteController {
    public function home(){
        require_once 'views/all/header.php';
        require_once 'views/cliente/home.php';
        require_once 'views/all/footer.php';
    }
}
