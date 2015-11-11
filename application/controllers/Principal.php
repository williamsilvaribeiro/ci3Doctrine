<?php

class Principal extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Entities/usuarios', 'usuario');
        $this->load->model('usuario_model');
    }

    function index() {
        $this->load->view('principal');
    }

    public function adicionar(){
        $this->usuario->nome = 'Ricardo';
        $this->usuario->email = 'meuemail@mail.com.br';
        $this->usuario->telefone = '11-1122-3345';
        $this->usuario->celular = '11-9988-7765';
        $this->usuario->endereco = '';
        $this->usuario->data = date('Y-m-d');

        $this->usuario_model->salvar($this->usuario);
        $this->load->view('principal');
    }

    public function isMobile() {
        return ob_start();
        preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i",
            $_SERVER["HTTP_USER_AGENT"]);
    }
}