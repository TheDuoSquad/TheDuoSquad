<?php

//Connection File
$host = 'localhost' ;
$username = 'Lee' ;
$pass = 'Fortnite13' ;
$dbname = 'lolol' ;
$dsn = "mysql:host=$host;dbname=$dbname";
$options = array(
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
);
$conn = new PDO($dsn, $username, $pass, $options);
