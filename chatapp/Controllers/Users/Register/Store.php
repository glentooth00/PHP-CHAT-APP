<?php 
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender  = $_POST['gender'];

if(!$username){
  $_SESSION['no-username'] = 'Please provide Username';
  header('location:Register.php');
}

if(!$password){
  $_SESSION['no-password'] = 'Please provide Password';
  header('location:Register.php');
}

if(!$firstname){
  $_SESSION['no-firstname'] = 'Please enter Firstname';
  header('location:Register.php');
}
if(!$lastname){
  $_SESSION['no-lastname'] = 'Please enter lastname';
  header('location:Register.php');
}

if(!$gender){
  $_SESSION['no-gender'] = 'Please indicate your gender';
  header('location:Register.php');
}




