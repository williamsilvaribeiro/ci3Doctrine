<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Clientes
 *
 * @ORM\Table(name="clientes")
 * @ORM\Entity
 */
class Clientes
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $nome
     *
     * @ORM\Column(name="nome", type="string", length=50, nullable=false)
     */
    private $nome;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;

    /**
     * @var string $telefone
     *
     * @ORM\Column(name="telefone", type="string", length=32, nullable=true)
     */
    private $telefone;

    /**
     * @var string $endereco
     *
     * @ORM\Column(name="endereco", type="string", length=32, nullable=true)
     */
    private $endereco;

    /**
     * @var string $cep
     *
     * @ORM\Column(name="cep", type="string", length=32, nullable=true)
     */
    private $cep;

    /**
     * @var integer $idusuario
     *
     * @ORM\Column(name="idUsuario", type="integer", nullable=true)
     */
    private $idusuario;


}