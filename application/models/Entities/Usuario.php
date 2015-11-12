<?php



//use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @Table(name="usuario")
 * @Entity
 */
class Usuario
{
    /**
     * @var integer $idUsuario
     *
     * @Column(name="idUsuario", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $idUsuario;

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
     * @var string $celular
     *
     * @Column(name="celular", type="string", length=32, nullable=true)
     */
    private $celular;

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
     * @var string $data
     *
     * @Column(name="data", type="string", length=255, nullable=true)
     */
    private $data;



//usuarioId idUsuario

}