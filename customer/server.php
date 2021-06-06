<?php

  $db = mysqli_connect('localhost','root','','hotel');

  if(isset($_POST['signup'])) {
      $email = mysqli_real_escape_string($_POST['email']);
      $password = mysqli_real_escape_string($_POST['password']);
      $cfpassword = mysqli_real_escape_string($_POST['cfpassword']);
      $name = mysqli_real_escape_string($_POST['name']);
      $surname = mysqli_real_escape_string($_POST['surname']);
      $phone = mysqli_real_escape_string($_POST['phone']);

  }


?>
