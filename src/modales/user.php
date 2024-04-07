<?php

class user{
    private string $fname;
    private string $lname;
    private string $email;
    private int $number;
    private string $gender;
    private string $city;
    private string $description;
    private string $file_path;

    public function __construct($fname,$lname,$email,$number,$city,$gender,$description,$file_path)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->email = $email;
        $this->number = $number;
        $this->city = $city;
        $this->gender = $gender;
        $this->description = $description;
        $this->file_path = $file_path;
    }

    

     public function setFname($fname)
     {
         $this->fname = $fname;
     }
 
     public function getFname()
     {
         return $this->fname;
     }


 
     public function setLname($lname)
     {
         $this->lname = $lname;
     }
 
     public function getLname()
     {
         return $this->lname;
     }


 
     public function setEmail($email)
     {
         $this->email = $email;
     }
 
     public function getEmail()
     {
         return $this->email;
     }


 
     public function setNumber($number)
     {
         $this->number = $number;
     }
 
     public function getNumber()
     {
         return $this->number;
     }

 
     public function setGender($gender)
     {
         $this->gender = $gender;
     }
 
     public function getGender()
     {
         return $this->gender;
     }
 
    

     public function setCity($city)
     {
         $this->city = $city;
     }
 
     public function getCity()
     {
         return $this->city;
     }

 
     public function setDescription($description)
     {
         $this->description = $description;
     }
 
     public function getDescription()
     {
         return $this->description;
     }
 

     public function setFilePath($file_path)
     {
         $this->file_path = $file_path;
     }
 
     public function getFilePath()
     {
         return $this->file_path;
     }
}


?>