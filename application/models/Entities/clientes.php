<?php


/**
 *
 * @Entity
 * @Table(name="clientes")
 */
class Clientes {
    /**
     * @Id @Column(type="integer")
     * @GeneratedValue(strategy="IDENTITY")
     */
    public $id = 0;


    /**
     * @Column(type="string", columnDefinition="VARCHAR(50) NOT NULL")
     */
    public $nome = 0;


    /**
     * @Column(type="string", columnDefinition="VARCHAR(50) NOT NULL")
     */
    public $email = 0;


    /**
     * @Column(type="string", length=32, nullable=true)
     * @var type
     */
    public $telefone = '';


    /**
     *  @ORM\Column(type="string", length=32, nullable=true)
     * @var type
     */
    public $celular = '';
    /**
     * @Column(type="string", length=32, nullable=true)
     * @var type
     */
    public $endereco = '';
    /**
     * @Column(type="string", length=32, nullable=true)
     * @var type
     */
    public $cep = '';
    /**
     * @Column(type="integer", length=32, nullable=true)
     * @var type
     */
    public $idUsuario = '';
}


/* End of file usuario.php */
/* Location: ./application/model/usuario.php */