<?php 

namespace App\Model;

use App\Lib\Input;
use App\Model\DAO\ProfileDAO;
use App\Model\DTO\ProfileDTO;
use App\Lib\Upload;

class ProfileFormUpdate
{
    private $input;
    private $profileDto;
    private $profileDao;
    private $upload;
    
    
    public function __construct(
        Input $input,
        ProfileDTO $profileDto,
        ProfileDAO $profileDao,
        Upload $upload
    )
    {

    $this->input       = $input;
    $this->profileDto  = $profileDto;
    $this->profileDao  = $profileDao;
    $this->upload      = $upload;
        
    }

    
    public function process()
    {

        $id = $this->input->post('id');

            $this->profileDto->setFisrtName(          $this->input->post('firstName'));
            $this->profileDto->setLastName(           $this->input->post('lastName'));
            $this->profileDto->setAge(                $this->input->post('age'));
            $this->profileDto->setEmail(              $this->input->post('email'));
            $this->profileDto->setPassword(           $this->input->post('password'));
            $this->profileDto->setGender(             $this->input->post('gender'));
            $this->profileDto->setShowProfileOf(      $this->input->post('showProfileOf'));
            $this->profileDto->setShowPeopleOnRadius( $this->input->post('showPeopleOnRadius'));
            $this->profileDto->setShowMinAge(         $this->input->post('showMinAge'));
            $this->profileDto->setShowMaxAge(         $this->input->post('showMaxAge'));


            $image = $this->input->post('imageHidden');
            $isFile = (array_key_exists('image', $_FILES));
            $file = (!$isFile) ?  [] : $_FILES['image'];

            if(!empty($file['tmp_name']))
            {
                $this->upload
                    ->setPath(PATH_WWW_UPLOAD) 
                    ->setFile($file) 
                    ->setFileName('profile_' . $id)
                    ->moveFile();

                $image = $this->upload->getFileName();
            }

            $this->profileDto->setImage($image);
            $this->profileDao->update($this->profileDto, $id);

    } 
    


}    



