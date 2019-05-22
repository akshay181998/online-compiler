<?php
    $to = "vashishtha18akshay@gmail.com";
    $from = "From: vashishtha3akshay@gmail.com";
    $sub = "otp send";
    $msg = "your otp is 154645";
    mail('vashishthaakshay18@gmail.com','otp send','your otp is 154645','From: vashishtha3akshay@gmail.com');
    if(mail('vashishthaakshay18@gmail.com','otp send','your otp is 154645','From: vashishtha3akshay@gmail.com')){
        echo mail($to,$sub,$msg,$from);
        echo 'msg sent';
    }
    else{
        echo mail($to,$sub,$msg,$from);
        echo 'not working';
    }

?>