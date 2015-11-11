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

    public function buscar() {
        $nomeTabela = get_class($this->usuario);
        $this->load->view('principal');
        return $this->usuario_model->buscarTodos($nomeTabela);
    }

    public function editar() {
        $objeto = $this->buscar()[0];
        $this->usuario = $objeto;
        $this->usuario->nome = 'William';
        $this->usuario_model->editar($this->usuario);
        $this->load->view('principal');
    }

    public function excluir() {
        $var = $this->buscar()[0]?$this->buscar()[0]:null;
        $this->usuario_model->excluir($var);
        $this->load->view('principal');
    }
}