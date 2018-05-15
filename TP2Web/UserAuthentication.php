<?php
  $mysql = 'mysql:host=localhost;dbname=analyses';
  $dbusername = 'root';
  $dbpassword = '';
  $db = new PDO($mysql, $dbusername, $dbpassword);

  $procedures = $db->query("SELECT email, password FROM users WHERE email='" . $email . "'");

?>