<?php
  
  $dsn = "mysql:host=localhost;dbname=LoginSystem;charset=utf8";
  $username = "root";
  $password = "";
  try {
      $pdo = new PDO($dsn, $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
      echo 'sucess';
      return $pdo;
      }
  catch (PDOException $e) {
       die('Error : '.$e->getMessage());
      }


?>