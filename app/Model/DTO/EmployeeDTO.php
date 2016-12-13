<?php 

namespace App\Model\DTO;
/**
 * @Entity @Table(name="tb_employee")
 **/

class EmployeeDTO
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;

    /** @Column(type="string") **/
    private $firstName;

    /** @Column(type="string") **/
    private $lastName;

    /** @Column(type="string") **/
    private $email;


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



    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
















}    


