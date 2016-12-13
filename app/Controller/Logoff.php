<?php


namespace App\Controller;

use App\Lib\Session;

class Logoff
{
    public function __construct() 
    {
             $this->session = new Session();
    }

    public function index()
    {
        $this->session->destroy();

        header('location: ' . BASE_URL . 'sign_in');
    } 

    
}





