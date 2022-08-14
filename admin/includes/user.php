<?php

class user{
 
public static function  find_all_users(){
    global $Database;
    $result_set = $Database->query("SELECT * FROM user");
    return $result_set;

}


public static function  find_user_id($user_id){
    global $Database;
    $get_id = $Database->query("SELECT * FROM user WHERE id='$user_id' LIMIT 1");
    $found_user=mysqli_fetch_array($get_id);
    return $found_user;

}



}






?>