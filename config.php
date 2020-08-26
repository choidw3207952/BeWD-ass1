<?php

$host       = "35.213.222.186";
$username   = "choidw0119@dawoonc.sg-host.com";
$password   = "act688688";
$dbname     = "db697285w7ztcc"; 
$dsn        = "mysql:host=$host;dbname=$dbname"; 
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
/* Attempt to connect to MySQL database */
try{
  $pdo_connection = new PDO($dsn, $username, $password, $options);
} catch(PDOException $e){
  die("ERROR: Could not connect. " . $e->getMessage());
}
?>
