<?php

$username_enter="Paola";
$password_enter="1234";

$the_username=isset($_GET['username']) ? $_GET['username'] : $_POST['username'];
$the_password=isset($_GET['password']) ? $_GET['password'] : $_POST['password'];

if ($the_username==$username_enter && $the_password==$password_enter) {
  echo 'authorized';
} else {
  echo 'error';
}



?>
