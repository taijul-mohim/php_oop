<?php
require_once("config.php");

class Database {

  public $conn;

  function __construct()
  {
    $this-> open_db();
  }

public function open_db() {
// conn data base
  $this->conn = new mysqli(DB_HOST,DB_User,DB_PASS,DB_NAME);

  if($this->conn->mysqli_errno) {

  die("Database Connection Faild badly".$this->conn->connect_error );
  
  }

}

public function query($sql) {

  $result = $this->conn->query($sql);
  $this->confirm_query($result);
  
  return $result;

}

private function confirm_query($result){

  if(!$result) {
  
    die("Query Faild ". $this->conn->error);
  
  }

}

public function escape_sting($string){
  
  $escaped_strign = $this->conn->real_escape_string($string);
   
  return $escaped_strign;
  
}

public function insert_id(){
  return $this->conn->insert_id;
}


}
// end function

$Database= new Database();



?>