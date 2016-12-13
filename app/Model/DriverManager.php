<?php 

namespace App\Model;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use App\Model\Contract\DriverManagerInterface;

class DriverManager implements DriverManagerInterface
{

    private $isDevMode = FALSE;
    private $entityManager;
    private $params = array(
        'driver'   => 'pdo_mysql',
        'user'     => 'root',
        'password' => 'root',
        'dbname'   => 'db_ibgen',
    );


    public function __construct()
    {
        self::config();
    }


    public function getConn()
    {
        return $this->entityManager;
    } 


    private function config()
    {
        $paths          = array(PATH_ROOT . "app/Model/DTO");
        $config         = Setup::createAnnotationMetadataConfiguration($paths, $this->isDevMode);
        $entityManager  = EntityManager::create($this->params, $config);

        $this->entityManager = $entityManager;
    } 


}


