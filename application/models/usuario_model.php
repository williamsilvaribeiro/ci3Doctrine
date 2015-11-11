<?php

class Usuario_model extends CI_Model {

    public function __construct() {
    }

    public function salvar($objeto) {
        $this->doctrine->em->persist($objeto);
        $this->doctrine->em->flush();
    }
}