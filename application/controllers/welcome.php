<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * @property usuario $usuario Classe de usuário
 * @property Doctrine $doctrine Biblioteca ORM
 */
class Welcome extends CI_Controller
{


    public function index()
    {
        $this->load->model('Entities/usuario', 'usuario');
        $this->usuario->nome = 'Ricardo';
        $this->usuario->email = 'meuemail@mail.com.br';
        $this->usuario->telefone = '11-1122-3345';
        $this->usuario->celular = '11-9988-7765';

        $this->doctrine->em->persist($this->usuario);
        $this->doctrine->em->flush();
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */