<?php
use MongoDB\Driver\Query;


  require('connecton.php');

  $username = $_POST["username"];
  $email = $_POST["email"];
  $dob = $_POST["dob"];
  $phoneFormat = $_POST["format"];
  $phoneno = $_POST["phoneno"];


  
  //creating a database for managing emails
  $createDB_one = "CREATE DATABASE email_manager";
  $queryDB_one = mysqli_query($connection, $createDB_one);
  if($queryDB_one){
    echo "<script>alert('database is created');</script>";
  }

  $selectDb_one = mysqli_select_db($connection, "email_manager");
  if($selectDb_one){
    //echo "<script>alert('database is selected');</script>";

    //create table
    $createTb_one = "CREATE TABLE list_site(
      mails VARCHAR(50)
    )";
    $queryTb_one = mysqli_query($connection, $createTb_one);

    if($queryTb_one){
     // echo "<script>alert('table is created');</script>";
    }


    if(isset($_POST["proceed"])){

      //check if email exist or not
      $selectDb_two = "SELECT * FROM list_site WHERE mails='$email'";
      $query_Select = mysqli_query($connection, $selectDb_two);
      $checking_exist = mysqli_num_rows($query_Select);

      if($checking_exist > 0){
        header("Location: http://localhost/musiccarri/signup/errorpage/wronge_email/wronge_email..php");
      }else{  
         //insert into the database
         $insert_DB = "INSERT INTO list_site(mails) VALUES ('$email')";
         if($connection->query($insert_DB) === TRUE){
             // echo "<script>alert('inserted');</script>";

             //create a storage source for username
             $cookie_name = "username";
             $cookie_value = $username;
             setcookie($cookie_name, $cookie_value, time() + (84600 * 1), "/");


             $createDB_two = "CREATE DATABASE $username";
             $queryDB_two = mysqli_query($connection, $createDB_two);
             
             $selectDb_user = mysqli_select_db($connection, $username);
             if($selectDb_user){
               //create table for user
               $createTB_user = mysqli_query($connection, "CREATE TABLE user_manual_00(
                 username VARCHAR(40),
                 password VARCHAR(40),
                 email VARCHAR(40),
                 phoneformat int(40),
                 phoneno int(40),
                 dob int(30),
                 createdDate int(40),
                 verificationCode int(40),
                 link VARCHAR(40)
               )");

               if($createTB_user){
                 

                $varificationCode = rand() * 2300983;

                $insert_datas =  "INSERT INTO user_manual_00(
                  username,
                  password,
                  email,
                  phoneformat,
                  phoneno,
                  dob,
                  createdDate,
                  verificationCode,
                  link
                ) VALUES (
                  '$username',
                  '-',
                  '$email',
                  '$phoneFormat',
                  '$phoneno',
                  '$dob',
                  '-',
                  '$varificationCode',
                  '-'
                )";

                if($connection->query($insert_datas) === TRUE){
                  //do this
                  header("Location: http://localhost/musiccarri/signup/varification.php");
                }
               }
             }
         }
      }


    }


  }

?>