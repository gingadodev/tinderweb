<?php 

namespace App\Model\DAO;


use App\Model\DriverManager;
use App\Model\Contract\DriverManagerInterface;
use App\Model\DTO\ProfileDTO;

class ProfileDAO
{
    private $conn;
    private $useDTO = 'App\Model\DTO\ProfileDTO';
    private $sprintError = "Error Profile DAO: '%s'";


    public function __construct(
        DriverManagerInterface $driveManager
    )
    {
        $this->conn = $driveManager->getConn();
    }


    public function signIn($login, $password)
    {
        $row = $this->conn->getRepository($this->useDTO);
        $result = $row->findBy(array(
            'email'     => $login,
            'password'  => $password
        ));

        // return $result[0];

        return (!array_key_exists(0, $result))? NULL : $result[0];



    } 


    public function teste($login, $password)
    {
        return $this->conn->getRepository($this->useDTO)->signIn($login, $password);
    } 
    



    public function getById($id)
    {

        try {

            $row = $this->conn->find($this->useDTO, $id);

            if ($row === null) 
            {
                throw new \Exception("No Profile found.\n" );
            }

            return $row;


        } catch (\Exception $e) {

            throw new \Exception(
                sprintf($this->sprintfError, 
                $e->getMessage() ) 
            );

        }

    } 


    public function getAllByGender($gender)
    {
        $row = $this->conn->getRepository($this->useDTO);
        $all = $row->findBy(array('gender' => $gender));
        return $all;

    } 


    public function getAllByShowProfileOf($showProfileOf)
    {
        $row = $this->conn->getRepository($this->useDTO);
        $all = $row->findBy(array('showProfileOf' => $showProfileOf));
        return $all;

    } 



    public function getAll()
    {
        $row = $this->conn->getRepository($this->useDTO);
        $all = $row->findAll();

        return $all;

    } 





    public function insert(ProfileDTO $profile)
    {

        try {

            $this->conn->persist($profile);
            $this->conn->flush();

            return $this;

        } catch (Exception $e) {

            throw new \Exception(
                sprintf($this->sprintfError, 
                $e->getMessage() ) 
            );
        }

    } 


    public function update(ProfileDTO $profile, $id)
    {

        $row = self::getById($id);


        if ($row === null) 
        {
            $notId = "Profile id:%d does not exist.\n";
            throw new \Exception( sprintf($notId, $id));
        }

        $row->setFisrtName($profile->getFisrtName());
        $row->setLastName($profile->getLastName());
        $row->setAge($profile->getAge());
        $row->setEmail($profile->getEmail());
        $row->setPassword($profile->getPassword());
        $row->setImage($profile->getImage());
        $row->setGender($profile->getGender());
        $row->setShowProfileOf($profile->getShowProfileOf());
        $row->setShowPeopleOnRadius($profile->getShowPeopleOnRadius());
        $row->setShowMinAge($profile->getShowMinAge());
        $row->setShowMaxAge($profile->getShowMaxAge());

        $this->conn->flush();

        return $this;


    } 



}    


