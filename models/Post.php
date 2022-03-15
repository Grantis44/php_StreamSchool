<?php
 class Post {
     //DB Stuff
     private $conn;
     private $table = 'posts';

     //Post Properties
     public $Person_ID;
     public $FName;
     public $Sname;
     public $Role;
     public $Grade;
     public $Enroll_Date;
     public $HireDate;
     public $Subject_ID;
     public $SbjName;
     public $Result;
     public $online;

     // Constructor with DB

     public function __construct($db){
         $this->conn = $db;

     }
     // Get Posts
     public function  read(){
        $query = 'SELECT SbjNameas as Subject_Name,
                 p.id, 
                 p.
                 FROM 
                 ' .$this->table .' p 
                 LEFT JOIN ';

     //Prepare Statement           
      $stmt = $this->conn->prepare($query);
      
      //Execute query
      $stmt->execute();

      return $stmt;
     }

 }