<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

foreach($_POST as $input):
  if(empty($input)):
    include '../templates/error.php';
    exit;
  endif;
endforeach;

$pdo = new PDO('mysql:host=db;dbname=tm_db', 'task', 'pass');
$sql = 'SELECT id FROM users WHERE email=:email';
$statement = $pdo->prepare($sql);
$statement->execute([':email'=>$email]);
$user = $statement->fetchColumn();
if($user):
  $errorMessage = "This user's email already exist";
  include '../templates/error.php';
  exit;
endif;

$sql = 'INSERT INTO users (username, email, password) VALUES (:username, :email, :password)';
$statement = $pdo->prepare($sql);
$_POST['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT);
$result = $statement->execute($_POST);
if(!$result):
  $errorMessage = "Failed to registration";
  include '../templates/error.php';
  exit;
endif;

header('Location: ../login-form.php'); exit;
?> 