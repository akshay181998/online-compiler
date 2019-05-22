<?php 
    require_once "gapi/vendor/autoload.php";
    session_start();
    $client = new Google_Client();      
    $client->setAuthConfig('info.json');
    $client->setScopes([Google_Service_Oauth2::PLUS_LOGIN , Google_Service_Oauth2::USERINFO_EMAIL]);
    $client->setRedirectUri("http://localhost/practise/session_page.php");
?>