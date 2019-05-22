<?php 

    DEFINE('db_hostname' , 'localhost' ) ;
    DEFINE('db_username' , 'Admin' );
    DEFINE('db_password' , 'LQSuA2tFHgw0xPV2');

    $conn = @mysqli_connect(db_hostname , db_username , db_password )
    OR die('unable to connect to the page sorry ' . mysqli_connect_error());

?>