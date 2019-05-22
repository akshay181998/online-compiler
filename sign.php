<?php 
    require_once "dbinfo.inc.php" ;
    require "signin.php";
    $database = "firstdatabase" ;
    mysqli_select_db($conn , $database) ;
    if(isset($_POST['email'])&&isset($_POST['password'])){
        $email = htmlentities($_POST['email']);
        $password = md5($_POST['password']);
        if(!empty($email)&&!empty($password)){
            $query = "SELECT * FROM `first_data_base` WHERE 1";
            if(@$query_run = mysqli_query($conn , $query)){
                while($item = mysqli_fetch_array($query_run ,  MYSQLI_ASSOC)){
                    if(($email==$item['email'])&&$password==$item['password']){
                        session_start();
                        $_SESSION['user'] =  $item ;
                        header('Location: sessionhmtl.inc.php');
                    }
                }
                echo '<script>alert("Invalid username or password");</script>';
            }else{
                echo 'error occur' ;
            }
        }
    }
?>