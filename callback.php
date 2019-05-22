<?php
    require "config.php";
    $gurl = $client->createAuthUrl();
    header("location: ".$gurl);
?>