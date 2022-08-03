<?php
require_once("config.php");

class Database {

  public $conn;
  function __construct()
  {
    $this->open_db();
  }

public function open_db(){


  $this->conn=mysqli_connect(DB_HOST,DB_User,DB_PASS,DB_NAME);
if(mysqli_connect_errno()){

    die("Database Connection Faild badly".mysqli_error($this->conn) );
}



}

public function query($sql){
    $result=mysqli_query($this->conn,$sql);
    if(!$result){
        die("Query die");
    
    }
    return $result;

}





}





$Database= new Database();



?>