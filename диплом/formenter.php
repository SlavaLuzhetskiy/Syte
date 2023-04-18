<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
   <link rel="stylesheet" href="style2.css">
  <title>Склада картриджей</title>
 </head>
 <body>
<h2> (Этаж, Кабинет, Подразделение), после этого нажать кнопку <i>обновить</i></h2>
<table>
<?php
echo '<form action="enter.php" method="post" class="f2">';
echo 'Вход';
  echo '<tr>';
    echo '<td>';
     echo 'Логин:<input type="text" name="cart_type" >';
    echo '</td>';
    echo '<td>';
     echo 'mail:<input type="text" name="printer" >';
    echo '</td>';
    echo '<td>';
     echo 'Пароль:<input type="text" name="volume" >';
    echo '</td>';
    echo '<td>';
      echo '<input type="submit" name="enter" value="Вход">';
    echo '</td>';
  echo '</tr>';
echo '</form>';
   
?>