<?php



use Doctrine\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity
 */
class Usuario
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
     * @var string $celular
     *
     * @ORM\Column(name="celular", type="string", length=32, nullable=true)
     */
    private $celular;

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
     * @var string $data
     *
     * @ORM\Column(name="data", type="string", length=255, nullable=true)
     */
    private $data;


}