<?php

session_start();

require_once "GoogleAuthenticator.php";

if($_SERVER['REQUEST_METHOD'] != "POST"){
  header("location: index.php");
  die();
}
$authenticator = new PHPGangsta_GoogleAuthenticator();

$checkResult = $authenticator->verifyCode($_SESSION['auth_secret'], $_POST['code'], 0);

if($checkResult){
 //  die("Codigo coincide");
    header('location: perfil.php');
    die();

}else{
  die("Código no coincide");
}
