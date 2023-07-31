<?php
//autoload do composer
require (__DIR__.'/vendor/autoload.php');
require (__DIR__.'/app/Session/user.php');
//require_once('vendor/google/apiclient/src/Client.php');

//dependencias
use Google\client as GoogleClient;

//verifica os campos obrigatorios 
if(!isset($_POST['credential']) || !isset($_POST['g_csrf_token'])){
    header('location: index.php');
    exit;
}
//cookie CSRF
$cookie = $_COOKIE['g_csrf_token'] ?? '';

if($_POST['g_csrf_token'] != $cookie){
    header('location: index.php');
    exit;
}

$CLIENT_ID = "521051242555-gver8morcu70976qqssb9bii0b3dr8pf.apps.googleusercontent.com";


// Get $id_token via HTTPS POST.
$client = new GoogleClient(['client_id' => $CLIENT_ID]);  // Specify the CLIENT_ID of the app that accesses the backend
$payload = $client->verifyIdToken($_POST['credential']);

if (isset($payload['email'])) {
   User::login($payload['name'],$payload['email']);
   header('location: index.php');
   exit;

} 

die('Deu merda!');

// echo"<pre>";
// print_r($_POST);
// echo"</pre>"; 

// echo"<pre>";
// print_r($cookie);
// echo"</pre>";exit;