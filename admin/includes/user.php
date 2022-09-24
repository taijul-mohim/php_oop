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
    $get_id =self::find_this_query("SELECT * FROM user WHERE id='$user_id' limit 1");
    $found_user=mysqli_fetch_array($get_id);
    return $found_user;

}

public static function find_this_query($sql){
    global $Database;
    $result_set = $Database->query($sql);
    return $result_set;
}

public static function instantation($found_user){
    global $Database;
    $this_object=new self;
 $this_object->user_name=$found_user['user_name'];
  
      $this_object->first_name=$found_user['first_name'];
  
     $this_object->last_name=$found_user['last_name'];
    
    return $this_object;

}



}






?>