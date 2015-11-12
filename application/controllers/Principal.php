<?php

class Principal extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Entities/BlogComment', 'usuario');
        $this->load->model('usuario_model');
    }

    function index() {
        $this->load->view('principal');
    }

    public function adicionar(){
        $this->usuario->autor ='Teste';


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