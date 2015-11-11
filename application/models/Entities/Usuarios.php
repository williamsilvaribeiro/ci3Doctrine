<?php


/**
 *
 * @Entity
 * @Table(name="usuario")
 */
class Usuarios {
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
     * @Column(type="string", length=32, nullable=true)
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
     * @Column(type="string", nullable=true)
     * @var type
     * */
    public $data = '';


    /**
     * @OneToMany(targetEntity="Clientes", mappedBy = "usuarios")
     * @JoinColumn(name="id", referencedColumnName="idUsuario")
     * */
    public $clientes;
}


/* End of file usuario.php */
/* Location: ./application/model/usuario.php */