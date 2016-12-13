<?php


namespace App\Controller\Sign;

use Zuni\View;
use App\Helper\Message;
use App\Lib\Session;
use App\Lib\Input;
use App\Model\DAO\ProfileDAO;
use App\Model\DTO\ProfileDTO;
use App\Model\DriverManager;

class In
{
    public function __construct() 
    { 
             $this->session = new Session();
             $this->input = new Input();


    }

    public function index()
    {

        $error = NULL;


       if(isset($_POST['submit']))
       {

           

           $conn = new DriverManager();
           $profileDao = new ProfileDAO($conn);
           $profileDto = new ProfileDTO();

       $login     = $this->input->post('login');
       $password  = $this->input->post('password');
       $row       = $profileDao->signIn($login, $password);

       if($row)
       {

             $this->session->set('id', $row->getId());
             $this->session->set('firstName', $row->getFisrtName());

             header('location: ' . BASE_URL);

       }
       else
       {
          $error = Message::error('Ops! Invalid user or password');
       }
       
       }



        $data['error'] = $error;
        $data['content'] = new View\Render('sign_in', $data);
        $view = new View\Render('_layout', $data);
        $view->result();
    } 
}





