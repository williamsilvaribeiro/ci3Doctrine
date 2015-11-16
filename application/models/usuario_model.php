<?php

class Usuario_model extends CI_Model {

    public function __construct() {
    }

    public function salvar($objeto) {
        $this->doctrine->em->persist($objeto);
        $this->doctrine->em->flush();
    }

    public function editar($objeto) {
        $this->doctrine->em->merge($objeto);
        $this->doctrine->em->flush();
    }

    public function buscarTodos($nomeTabela) {

        $obj = $this->doctrine->em->getRepository($nomeTabela)->findAll();
//        $obj = $this->doctrine->em->find($nomeTabela,2);
        return $obj;
    }

    public function excluir($obj) {
        $this->doctrine->em->remove($obj);
        $this->doctrine->em->flush();
    }
}