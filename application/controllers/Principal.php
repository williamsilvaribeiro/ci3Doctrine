<?php

class Principal extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'codegen_helper'));
    }

    function index() {
        $this->load->view('principal');

    }

    public function isMobile() {
        return ob_start();
        preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i",
            $_SERVER["HTTP_USER_AGENT"]);
    }
}