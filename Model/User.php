<?php

Class User{

    private $id;
    private $Name;
    private $Password;
    private $User_;
    private $Telephone;
    private $Address;
    private $Email;
    private $NumberSocio;

   

    function getid() {return $this->id;}
    function getName() {return $this->Name;}
    function getPassword() {return $this->Password;}
    function getUser_() {return $this->User_;}
    function getTelephone() {return $this->Telephone;}
    function getAddress() {return $this->Address;}
    function getEmail() {return $this->Email;}
    function getNumberSocio() {return $this->NumberSocio;}
    function setid($id) {        $this->id = $id;    }
    function setName($Name) {        $this->Name = $Name;    }
    function setPassword($Password) {$this->Password = $Password;    }
    function setUser_($User_) {$this->User_ = $User_;    }
    function setTelephone($Telephone) {$this->Telephone = $Telephone;    }
    function setAddress($Address) {$this->Address = $Address;    }
    function setEmail($Email) {$this->Email = $Email;    }
    function setNumberSocio($NumberSocio) {$this->NumberSocio = $NumberSocio;    }


   
}