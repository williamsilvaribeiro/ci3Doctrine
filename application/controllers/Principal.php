<?php
//require_once 'models\Repository\BlogPost.php';

class Principal extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Entities/BlogComment', 'comment');
        $this->load->model('usuario_model');
    }

    function index() {
        $this->load->view('principal');
    }

    public function adicionar(){
        $this->postagem->setContent('teste');
        $this->postagem->setCreatedAt(date('Y-m-d'));
        $this->postagem->setTitle('testetsess');

        $this->usuario_model->salvar($this->postagem);

        $this->load->view('principal');
    }

    public function buscar() {
        $nomeTabela = get_class($this->comment);
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