<?php


namespace App\Controller;

use Zuni\View;

class Error404
{
    public function __construct() 
    { }

    public function index()
    {
        $view = new View\Render('error404');
        $view->result();
    } 

}





