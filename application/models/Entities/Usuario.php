<?php

namespace models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 *  @ORM\Table(name="usuario")
 *  @ORM\Entity
 */
class Usuario
{
    /**
     *  @ORM\var integer $idUsuario
     *
     *  @ORM\Column(name="idUsuario", type="integer", nullable=false)
     *  @ORM\Id
     *  @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUsuario;

    /**
     *  @ORM\var string $nome
     *
     *  @ORM\Column(name="nome", type="string", length=50, nullable=false)
     */
    private $nome;

    /**
     *  @ORM\var string $email
     *
     *  @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;

    /**
     *  @ORM\var string $telefone
     *
     *  @ORM\Column(name="telefone", type="string", length=32, nullable=true)
     */
    private $telefone;

    /**
     *  @ORM\var string $celular
     *
     *  @ORM\Column(name="celular", type="string", length=32, nullable=true)
     */
    private $celular;

    /**
     *  @ORM\var string $endereco
     *
     *  @ORM\Column(name="endereco", type="string", length=32, nullable=true)
     */
    private $endereco;

    /**
     *  @ORM\var string $cep
     *
     *  @ORM\Column(name="cep", type="string", length=32, nullable=true)
     */
    private $cep;

    /**
     *  @ORM\var string $data
     *
     *  @ORM\Column(name="data", type="string", length=255, nullable=true)
     */
    private $data;

    /**
     *  @ORM\return int
     */
    public function getIdUsuario() {
        return $this->idUsuario;
    }

    /**
     *  @ORM\param int $idUsuario
     */
    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    /**
     *  @ORM\return string
     */
    public function getNome() {
        return $this->nome;
    }

    /**
     *  @ORM\param string $nome
     */
    public function setNome($nome) {
        $this->nome = $nome;
    }

    /**
     *  @ORM\return string
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     *  @ORM\param string $email
     */
    public function setEmail($email) {
        $this->email = $email;
    }

    /**
     *  @ORM\return string
     */
    public function getTelefone() {
        return $this->telefone;
    }

    /**
     *  @ORM\param string $telefone
     */
    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    /**
     *  @ORM\return string
     */
    public function getCelular() {
        return $this->celular;
    }

    /**
     *  @ORM\param string $celular
     */
    public function setCelular($celular) {
        $this->celular = $celular;
    }

    /**
     *  @ORM\return string
     */
    public function getEndereco() {
        return $this->endereco;
    }

    /**
     *  @ORM\param string $endereco
     */
    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    /**
     *  @ORM\return string
     */
    public function getCep() {
        return $this->cep;
    }

    /**
     *  @ORM\param string $cep
     */
    public function setCep($cep) {
        $this->cep = $cep;
    }

    /**
     *  @ORM\return string
     */
    public function getData() {
        return $this->data;
    }

    /**
     *  @ORM\param string $data
     */
    public function setData($data) {
        $this->data = $data;
    }

}