<?php
    /**
    * IBGEN - Projetos de Programaçao Aplicada 
    */
require '../vendor/autoload.php';
require '../app/Config/constant.php';

session_start();

$registry   = new Zuni\Registry\Container();
$app        = new Zuni\App($registry);

$app->run();

