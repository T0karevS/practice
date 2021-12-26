<?php
$fio = $_POST['fio'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = MD5($_POST['password']);
$password_c = MD5($_POST['password_c']);
if($password===$password_c)
{
    
    $pdo = new PDO( "mysql:host = localhost;dbname=knigiru", "root", "root");
    $bd = "INSERT INTO `users` (`id`, `fio`, `login`, `email`, `password`) VALUES (NULL, '$fio', '$login', '$email', '$password')";
    $statement = $pdo->prepare($bd);
    $statement->execute(['text'=>$_POST['text']]);
    header('Location: ../login.php');
}
else
{
    header('Location: ../register.php');
}
