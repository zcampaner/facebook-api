<?php
session_start();
require_once 'autoload.php';
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\GraphSessionInfo;
use Facebook\Entities\AccessToken;
use Facebook\HttpClients\FacebookCurlHttpClient;
use Facebook\HttpClients\FacebookHttpable;
// init app with app id and secret
FacebookSession::setDefaultApplication( '1023705181038443','928db30ef511a6533dcdb56e9c23e394' );


  // graph api request for user data
  $user_friends = new FacebookRequest(
      $session,
      'GET',
      '/me',
       array(
    'fields' => 'friends'
      )
    )->execute()->getGraphObject();
    $friends =  $user_profile->getProperty('data');
     $friends_data = $friends->asArray();//this will do all job for you..
        foreach($friends_data as $row){
            var_dump($row);
        }
?>