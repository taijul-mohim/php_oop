<?php 


define('DB_HOST','localhost');
define('DB_User','root');
define('DB_PASS','');
define('DB_NAME','gallery');
$conn=mysqli_connect(DB_HOST,DB_User,DB_PASS,DB_NAME);


if($conn){
    echo "true";
}




