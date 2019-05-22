<?php
  require 'html.inc.php' ;
  require_once 'dbinfo.inc.php' ;
  $dataBase = 'firstdatabase';
  mysqli_select_db($conn , $dataBase) ;
  $add = true ;


  if(isset($_POST['first_name'])&&isset($_POST['last_name'])&&isset($_POST['email'])&&isset($_POST['gender'])&&isset($_POST['password'])){
    $firstName = htmlentities($_POST['first_name']);
    $lastName = htmlentities($_POST['last_name']);
    $email = htmlentities($_POST['email']);
    $password = md5(htmlentities($_POST['password']));
    $gender = $_POST['gender'];
    if(!empty($firstName)&&!empty($lastName)&&!empty($email)&&!empty($password)&&!empty($gender)){
    // check whether this email is already in use or not 
    $querySelect = "SELECT `email` FROM `first_data_base` WHERE 1 ";
    $search = mysqli_query($conn , $querySelect) ;
    while( $result  = mysqli_fetch_array($search , MYSQLI_NUM) ){
      if($result[0]==$email){
        echo "<script>alert('Email is already exists');</script>";
        $add = false ;
        break ;
      }
    }

      // Add the new member into the data base 
      if($add){
        $query = " INSERT INTO first_data_base (`first_name` , `last_name` , `email` , `gender` , `password`)  VALUES ('$firstName'  , '$lastName' , '$email' , '$gender' , '$password')";
      if($query_run = mysqli_query($conn ,$query)){
        session_start();
        $_SESSION['info'] = $email ;
        header('Location: logincheck.php');
      }else{
        echo 'connection error'; 
      }
      }
    }else{
      echo 'connection error!!';
    }
  }
  mysqli_close($conn);
?>

