<?php
include 'db.php';
$login=$_POST['login'];
$mail=$_POST['mail'];
$name=$_POST['name'];
$password=$_POST['password'];

$user_add="insert into `users`(id, login, mail, name, password) value (null, '$login', '$mail', '$name', '$password')";
mysqli_query($db, $user_add);
header('Content-Type: text/html; charset=utf-8');
header('Refresh: 5; URL=/index.php');
echo "Пользователь добавлен";
?>