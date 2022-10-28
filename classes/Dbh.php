<?php

class Dbh {
    // Declaring the properties 
    private $hostname; 
    private $username; 
    private $password; 
    private $dbname; 

    //  Declaring the method
    protected function connect (){

        $this->hostname = "127.0.0.1";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "zuriphp.";
// initialising the object to connect to the database
        $conn = new mysqli($this->hostname, $this->username,$this->password, $this->dbname);
        if(!$conn){
            die("Connection failed:" . mysqli_connect_error());
        }
        return $conn;
    }

}

