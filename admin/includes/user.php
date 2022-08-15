<?php

class user{
    public $id;
    public $user_name;
    public $first_name;
    public $last_name;
    public $password;

    
public static function  find_all_users(){
   return self::find_this_query("SELECT * FROM user");
}

 
public static function  find_user_id($user_id){
    global $Database;
    $get_id =self::find_this_query("SELECT * FROM user WHERE id='$user_id'");
    $found_user=mysqli_fetch_array($get_id);
    return $found_user;

}

public static function find_this_query($sql){
    global $Database;
    $result_set = $Database->query($sql);
    return $result_set;
}



}






?>