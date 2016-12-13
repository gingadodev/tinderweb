<?php


namespace App\Controller;

use Zuni\View;
use App\Model\DriverManager;
use App\Model\DAO\ProfileDAO;
use App\Model\DTO\ProfileDTO;
use App\Lib\Session;

class Index
{
    public function __construct() 
    {
             $this->session = new Session();

             if(!$this->session->isKey('id'))
             {
                header('location: ' . BASE_URL . 'sign_in') ;
             }

    }

    public function index()
    {

       $conn = new DriverManager();

       $profileDao = new ProfileDAO($conn);
       $profileDto = new ProfileDTO();

       $row = $profileDao->getById($this->session->get('id'));

       $list = $profileDao->getAllByGender($row->getShowProfileOf());

       
        $dirSwiper          = 'swiper-master/dist/';
        $data['alignLogo']  = 'tx_center';
        $data['list']       = $list;
        $data['idProfile']  = $this->session->get('id');
        $data['cssArr'][]   = $dirSwiper . 'css/swiper.min.css' ;
        $data['jsArr'][]    = $dirSwiper . 'js/swiper.min.js' ;
        $data['jsArr'][]    = 'js/swiper.custom.js' ;

        $data['content'] = new View\Render('people', $data);
        $view = new View\Render('_layout', $data);
        $view->result();
    } 
    
}





