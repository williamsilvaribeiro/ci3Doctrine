<?php

use Doctrine\Common\Cache\ArrayCache;
use Doctrine\Common\ClassLoader;
use Doctrine\ORM\Configuration;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Console;
use Doctrine\ORM\Tools\EntityGenerator;
use Doctrine\ORM\Tools\EntityRepositoryGenerator;

/**
 * @property \Doctrine\ORM\EntityManager $em Gerenciador de Entidade
 */
class Doctrine {

    public $em = '';

//    models/Entities
//    __DIR__ .
//    third_party/DoctrineORM-2.2.2/libraries/

    public function __construct() {
        // Set up class loading. You could use different autoloaders, provided by your favorite framework,
        // if you want to.
        require_once APPPATH . 'third_party/DoctrineORM-2.2.2/libraries/Doctrine/Common/ClassLoader.php';
        require_once APPPATH . "third_party/DoctrineORM-2.2.2/libraries/Doctrine/ORM/Tools/Setup.php";

        Doctrine\ORM\Tools\Setup::registerAutoloadDirectory(APPPATH . "third_party/DoctrineORM-2.2.2/libraries/");

        $doctrineClassLoader = new ClassLoader('Doctrine', APPPATH . 'third_party/DoctrineORM-2.2.2/libraries');
        $doctrineClassLoader->register();
        $proxiesClassLoader = new ClassLoader('Proxies', APPPATH . 'third_party/DoctrineORM-2.2.2/libraries');
        $proxiesClassLoader->register();

        // Set up caches
        $config = new Configuration;
        $cache = new ArrayCache;
        $config->setMetadataCacheImpl($cache);
        $driverImpl = $config->newDefaultAnnotationDriver(array(APPPATH . 'third_party/DoctrineORM-2.2.2/libraries'));
        $config->setMetadataDriverImpl($driverImpl);
        $config->setQueryCacheImpl($cache);

        $config->setQueryCacheImpl($cache);

        // Proxy configuration
        $config->setProxyDir(APPPATH . 'models/Proxies');
        $config->setProxyNamespace('Proxies');



        // Set up logger
        #$logger = new EchoSQLLogger;
        #$config->setSQLLogger($logger);

        $config->setAutoGenerateProxyClasses(TRUE);

       // \Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration(array(__DIR__."/models/Entities"), true, null, null, false);


        require APPPATH . 'config/database.php';

        // Database connection information
        $connectionOptions = array(
            'driver' => 'pdo_mysql',
            'user' => $db['default']['username'],
            'password' => $db['default']['password'],
            'host' => $db['default']['hostname'],
            'dbname' => $db['default']['database'],
            'charset' => 'utf8',
            'driverOptions' => array(1002 => 'SET NAMES utf8')
        );


        // Enforce connection character set. This is very important if you are
        // using MySQL and InnoDB tables!
        //Doctrine_Manager::connection()->setCharset('utf8');
        //Doctrine_Manager::connection()->setCollate('utf8_general_ci');

        // Create EntityManager
        $this->em = EntityManager::create($connectionOptions, $config);

        // fetch metadata
        $driver = new \Doctrine\ORM\Mapping\Driver\DatabaseDriver(
            $this->em->getConnection()->getSchemaManager()
        );

        $this->em->getConfiguration()->setMetadataDriverImpl($driver);
        $cmf = new \Doctrine\ORM\Tools\DisconnectedClassMetadataFactory();
        $cmf->setEntityManager($this->em);

        $classes = $driver->getAllClassNames();

        $metadata = array();
        foreach ($classes as &$class) {
            $metadata[] = $cmf->getMetadataFor($class);
        }

        //Cria as entidades através do Metadata Driver Impl setado
        $generator = new EntityGenerator();
        $generator->setRegenerateEntityIfExists(true);
        $generator->setGenerateStubMethods(true);
        $generator->setGenerateAnnotations(true);
        $generator->generate($metadata, 'application\models\Entities');

        //Cria as classes Repository
        foreach ($classes as &$classe) {
            $repository = new EntityRepositoryGenerator();
            $repository->writeEntityRepositoryClass('Repository\\' . $classe, 'application\models');
        }

        //Carrega todas as entities criadas
        $dir = glob('application\models\Entities/*.php');
        foreach($dir as &$classFilename) {
            require_once $classFilename;
        }

        //Gera as classes Proxies
        $mt = $this->em->getMetadataFactory();
        $this->em->getProxyFactory()->generateProxyClasses($mt->getAllMetadata());


    }

}