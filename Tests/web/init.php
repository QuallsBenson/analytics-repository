<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();


require "../../vendor/autoload.php";


$config = require '../../config.php';


//configure client

$client = new Google_Client;
$client->setAccessType('online');
$client->setApplicationName('report_generator');
$client->setClientId( $config['clientId'] );
$client->setClientSecret( $config['clientSecret'] );
$client->setRedirectUri( $config['uri'] );
$client->setDeveloperKey( $config['apiKey'] ); // API key
$client->addScope( $config['scopes'] );


//initialize analytics service

$service = new  Google_Service_Analytics($client);


// destroy token if logout set

if (isset($_GET['logout'])) { 
    unset($_SESSION['token']);
	die('Logged out.');
}

// extract token from session and configure client

if (isset($_SESSION['token'])) { 
    $token = $_SESSION['token'];
    $client->setAccessToken($token);
}

// we received the positive auth callback, get the token and store it in session

if (isset($_GET['code']) && $client->isAccessTokenExpired()) { 

    try{

        $client->authenticate( $_GET['code'] );
        $_SESSION['token'] = $client->getAccessToken();

    } catch( \Google_Auth_Exception $e ){

        $authUrl = $client->createAuthUrl();
        header("Location: ".$authUrl);
        die;

    }

}


// if no token redirect to analytics login

if (!$client->getAccessToken()) { 
    $authUrl = $client->createAuthUrl();
    header("Location: ".$authUrl);
    die;
}


return [
	'service' => $service,
	'client'  => $client,
    'config'  => $config
];