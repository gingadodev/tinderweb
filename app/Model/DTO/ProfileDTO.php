<?php 

namespace App\Model\DTO;

/**
 * @Entity @Table(name="tinder_profile")
 **/
class ProfileDTO
{

    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;

    /** @Column(type="string") **/
    private $firstName;

    /** @Column(type="string") **/
    private $lastName;

    /** @Column(type="integer") **/
    private $age;

    /** @Column(type="string") **/
    private $email;

    /** @Column(type="string") **/
    private $password;

    /** @Column(type="string") **/
    private $image;

    /** @Column(type="string") **/
    private $gender;

    /** @Column(type="string") **/
    private $showProfileOf;

    /** @Column(type="integer") **/
    private $showPeopleOnRadius;

    /** @Column(type="integer") **/
    private $showMinAge;

    /** @Column(type="string") **/
    private $showMaxAge;




    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = (int) $id;
        return $this;
    }



    public function getFisrtName()
    {
        return $this->firstName;
    }

    public function setFisrtName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }



    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }



    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = (int) $age;
        return $this;
    }



    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }



    public function getPassword()
    {
        return $this->password;
    }
    
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
    
    
    
    
    

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }



    public function getGender()
    {
        return $this->gender;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }



    public function getShowProfileOf()
    {
        return $this->showProfileOf;
    }

    public function setShowProfileOf($showProfileOf)
    {
        $this->showProfileOf = $showProfileOf;
        return $this;
    }


    public function getShowPeopleOnRadius()
    {
        return $this->showPeopleOnRadius;
    }
    
    public function setShowPeopleOnRadius($showPeopleOnRadius)
    {
        $this->showPeopleOnRadius = $showPeopleOnRadius;
        return $this;
    }
    
    
    
    
    

    public function getShowMinAge()
    {
        return $this->showMinAge;
    }

    public function setShowMinAge($showMinAge)
    {
        $this->showMinAge = (int) $showMinAge;
        return $this;
    }



    public function getShowMaxAge()
    {
        return $this->showMaxAge;
    }

    public function setShowMaxAge($showMaxAge)
    {
        $this->showMaxAge = (int) $showMaxAge;
        return $this;
    }





}    


