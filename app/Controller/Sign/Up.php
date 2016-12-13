<?php


namespace App\Controller\Sign;

use Zuni\View;
use App\Model\DAO\ProfileDAO;
use App\Model\DTO\ProfileDTO;
use App\Model\DriverManager;
use App\Model\ProfileFormInsert;
use App\Model\ProfileFormUpdate;
use App\Lib\Upload;
use App\Lib\Input;
use App\Lib\Session;

class Up 
{
    public function __construct() 
    {
        $conn               = new DriverManager();
        $this->input        = new Input();
        $this->profileDao   = new ProfileDAO($conn);
        $this->profileDto   = new ProfileDTO();
        $this->upload       = new Upload();
        $this->session      = new Session();
    }

    public function index()
    {
        self::insert();
    } 



    public function insert()
    {


        if(isset($_POST['submit']))
        {

            $profileFormInsert = new ProfileFormInsert(
                $this->input,
                $this->profileDto,
                $this->profileDao,
                $this->upload 
            ) ;

            $profileFormInsert->process();

            header('location: ' . BASE_URL . 'sign_in') ;
        }


        $data['error']   = '';
        $data['input']   = $this->input;
        $data['content'] = new View\Render('sign_up_insert', $data);
        $view = new View\Render('_layout', $data);
        $view->result();
    } 



    public function update()
    {

        if(!$this->session->isKey('id'))
        {
            header('location: ' . BASE_URL . 'sign_in') ;
        }

        if(isset($_POST['submit']))
        {

            $profileFormUpdate = new ProfileFormUpdate(
                $this->input,
                $this->profileDto,
                $this->profileDao,
                $this->upload 
            ) ;

            $profileFormUpdate->process();


            header('location: ' . BASE_URL) ;
        }
        $row = $this->profileDao->getById($this->session->get('id'));

        $data['row']     = $row;
        $data['error']   = '';
        $data['input']   = $this->input;
        $data['content'] = new View\Render('sign_up_update', $data);
        $view = new View\Render('_layout', $data);
        $view->result();
    } 



}





