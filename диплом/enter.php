<?php
include 'db.php';
$login=$_POST['login'];
$mail=$_POST['mail'];
$password=$_POST['password'];

    @mysqli_query ($db, 'set character_set_results = "utf8"');
    $res = mysqli_query($db, "SELECT * FROM `users` where `mail`='$mail' AND `password` ='$password');
    $result = mysqli_query($link, $res);
    $user = mysqli_fetch_assoc($result);
    if (!empty($user))
    {
      include 'cabinet.php';
    }
echo 'пользователя нет'
?>