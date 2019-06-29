<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];

foreach($_POST as $input):
  if(empty($input)):
    include '../templates/error.php';
    exit;
  endif;
endforeach;

$pdo = new PDO('mysql:host=db;dbname=tm_db', 'task', 'pass');
$sql = 'SELECT * FROM users WHERE email=:email';
$statement = $pdo->prepare($sql);
$statement->execute([':email'=>$email]);
$user = $statement->fetchAll();
if($email == $user[0]['email'] && password_verify($password, $user[0]['password'])):
  $_SESSION['session_username'] = $user[0]['username'];
  header('Location: ../account.php');
  exit;
else:
  $errorMessage = "Invalid email or password";
  include '../templates/error.php';
  exit;
endif;

?>