<?php


namespace App\Controller;

use Zuni\View;

class Sign_Up
{
    public function __construct() 
    { }

    public function index()
    {
        $data['content'] = new View\Render('sign_in');
        $view = new View\Render('_layout', $data);
        $view->result();
    } 

}





