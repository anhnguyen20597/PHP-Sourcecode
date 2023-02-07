<?php
    class User {
        public $name;
        public $email;
        public $age;
        public $password;

        public function __construct($name,$email,$age,$password)
        {
            $this->name = $name;
            $this->email = $email;
            $this->age = $age;
            $this->password = $password;

        }

        function set_name($name){
            $this -> name = $name;
        }

        function get_name(){
            return $this->name;
        }
    }

    $user1 = new User('Anhnt18','anhnt18@rikkeisoft.com','25','12244');
    //$user2 = new User();
    /*$user1 -> name = 'Anh';
    $user1 -> email = "anhnt18@rikkeisoft.com";
    $user1 -> age = '25';
    $user1 -> password = "1234";
    */
    //$user1->set_name('Anh123');
    //$user2->set_name('Anh');
    //print_r($user1);
    //print_r($user2);
    //echo $user1->get_name()."\n";
    //echo $user2->get_name()."\n";
    //echo $user1-> name;


    class Employee extends User{
        public $title;
        public function __construct($name,$email,$age,$password,$title){
            parent::__construct($name,$email,$age,$password);
            $this->title = $title;
        }
        public function get_title(){
            return $this->title;
        }
    }
    $employee1 = new Employee('Nguyen','anhnt@gmail.com','25','1243','Sales');
    echo $employee1->get_title();
?>