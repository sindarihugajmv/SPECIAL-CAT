<?php
// Start session
if(!session_id()){
    session_start();
}

// Include Github client library 
require_once 'scr/Github_OAuth_Client.php';

/*
 * Configuration and setup GitHub API
 */
$clientID         = 'bccf00f15cfea1df3d73';
$clientSecret     = '412db27044f3ec802d2735dfd80ca66f018c022f';
$redirectURL     = 'http://localhost/special_cat/home.php';

$gitClient = new Github_OAuth_Client(array(
    'client_id' => $clientID,
    'client_secret' => $clientSecret,
    'redirect_uri' => $redirectURL,
));


// Try to get the access token
if(isset($_SESSION['access_token'])){
    $accessToken = $_SESSION['access_token'];
}