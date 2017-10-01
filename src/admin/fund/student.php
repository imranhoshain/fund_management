<?php
namespace App\admin\student;
use App\Connection;
use PDO;
use PDOException;
class Student extends Connection{
    private $id;
    private $roll;
    private $name;
    private $email;
    private $phone;
    private $department;
    private $image;
    public function set($data = array()){
        if(array_key_exists('id',$data)){
            $this->id = $data['id'];
        }
        if(array_key_exists('roll',$data)){
            $this->roll = $data['roll'];
        }
        if(array_key_exists('name',$data)){
            $this->name = $data['name'];
        }
        if(array_key_exists('email',$data)){
            $this->email = $data['email'];
        }
        if(array_key_exists('phone',$data)){
            $this->phone = $data['phone'];
        }
        if(array_key_exists('department',$data)){
            $this->department = $data['department'];
        }
        if(array_key_exists('image',$data)){
            $this->image = $data['image'];
        }
        return $this;
    }
    
    
    public function upload(){
        
    }
    
    
    /*public function store(){
        try {
            $query = ("INSERT INTO `student_info`(`roll`, `name`, `email`, `phone`, `department`, `image`) VALUES(:roll, :name, :email, :phone, :department, :image)");
            $stmt = $this->con->prepare($query);
            $store = $stmt->execute(array(
            ':roll' => $this->roll,
            ':name' => $this->name,
            ':email' => $this->email,
            ':phone' => $this->phone,
            ':department' => $this->department,
            ':image' => $this->image,
                
            ));
        }
        catch(PDOException $e){
            print "Error!: " . $e->getMessage() . "<br />";
        }
    }*/
}