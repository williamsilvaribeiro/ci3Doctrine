<?php

use Repository\ComprasRepository;

class Principal extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Entities/Compras', 'compras');
        $this->load->model('usuario_model');
    }

    function index() {
        $this->load->view('principal');
    }

    public function adicionar(){
        $this->cliente->setNome('maira');
        $this->cliente->setEndereco("fdfsdfsdfsfsdfsd");

        $this->doctrine->em->persist($this->cliente);
        $this->doctrine->em->flush($this->cliente);

        $this->load->view('principal');
    }

    public function buscar() {
        $nomeTabela = get_class($this->compras);
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