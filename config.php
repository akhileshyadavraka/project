<?php

define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','nikhil');

//try to connect databse
$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

//check the connection
if($conn == false)
{
  dir('ERROR: can not connect');
}
else{
  #echo "connected successfully";
}
?>






  





