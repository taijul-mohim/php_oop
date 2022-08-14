<?php

class user{
 
public function find_all_users(){
    global $Database;
    $result_set = $Database->query("SELECT * FROM user");
    return $result_set;


}





}






?>