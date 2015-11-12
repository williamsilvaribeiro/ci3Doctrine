<?php



//use Doctrine\ORM\Mapping as ORM;

/**
 * Clientes
 *
 *  @ORM\Table(name="clientes")
 *  @ORM\Entity
 */
class Clientes
{
    /**
     *  @ORM\var integer $idCliente
     *
     *  @ORM\Column(name="idCliente", type="integer", nullable=false)
     *  @ORM\Id
     *  @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCliente;

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
     *  @ORM\ManyToOne(targetEntity="Usuario", inversedBy="children")
     *  @ORM\JoinColumn(name="usuarioId", referencedColumnName="idUsuario" cascade={"remove"})
     */
    private $usuario;

    /**
     *  @ORM\return int
     */
    public function getIdCliente() {
        return $this->idCliente;
    }

    /**
     *  @ORM\param int $idCliente
     */
    public function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    /**
     *  @ORM\return mixed
     */
    public function getUsuario() {
        return $this->usuario;
    }

    /**
     *  @ORM\param mixed $usuario
     */
    public function setUsuario($usuario) {
        $this->usuario = $usuario;
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



}