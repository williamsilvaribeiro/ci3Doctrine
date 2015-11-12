<?php



//use Doctrine\ORM\Mapping as ORM;

/**
 * Clientes
 *
 * @Table(name="clientes")
 * @Entity
 */
class Clientes
{
    /**
     * @var integer $idCliente
     *
     * @Column(name="idCliente", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $idCliente;

    /**
     * @var string $nome
     *
     * @Column(name="nome", type="string", length=50, nullable=false)
     */
    private $nome;

    /**
     * @var string $email
     *
     * @Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;

    /**
     * @var string $telefone
     *
     * @Column(name="telefone", type="string", length=32, nullable=true)
     */
    private $telefone;

    /**
     * @var string $endereco
     *
     * @Column(name="endereco", type="string", length=32, nullable=true)
     */
    private $endereco;

    /**
     * @var string $cep
     *
     * @Column(name="cep", type="string", length=32, nullable=true)
     */
    private $cep;

    /**
     * @var integer $usuarioId
     *
     * @Column(name="usuarioId", type="integer", nullable=true)

     */
    private $usuarioId;


    /**
     * @ManyToOne(targetEntity="Usuario", inversedBy="children")
     * @JoinColumn(name="usuarioId", referencedColumnName="idUsuario")
     */
    private $users;


    //usuarioId idUsuario



}