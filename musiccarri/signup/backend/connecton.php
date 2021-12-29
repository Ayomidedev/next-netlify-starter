<?php

  //require('signup_server.php');

  $requrement = array(
   $host = "127.0.0.1",
   $user = "root",
   $password = ""
  );

  $connection = mysqli_connect(
   $requrement[0],
   $requrement[1],
   $requrement[2]
  );

  if($connection){
   echo "connected";
  }else{
   echo "not connected";
  }

?>