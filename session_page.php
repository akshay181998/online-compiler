<?php 
    require_once "config.php";
    if(isset($_SESSION['accessToken'])){
        $client->setAccessToken($_SESSION['accessToken']);
    } else if (isset($_GET['code'])) {
        $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
        $_SESSION['accessToken'] = $token ;
    }else{
        header("Location: index.php");
    }
    $oAuth = new Google_Service_Oauth2($client);
    $user = $oAuth->userinfo->get();
    echo '<pre>';
    print_r($user);
    $userInfo['first_name'] = $user->givenName ;
    $userInfo['last_name'] = $user->familyName ;
    $userInfo['email'] = $user->email ;
    $_SESSION['user'] = $userInfo ;
    print_r($user);
    header("Location: sessionhmtl.inc.php");
?>
