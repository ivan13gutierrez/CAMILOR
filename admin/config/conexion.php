<?php
$conn = new mysqli("bg8cek4jkgszjwusturj-mysql.services.clever-cloud.com", "uxmtkjwslezpihhv", "uxmtkjwslezpihhv", "bg8cek4jkgszjwusturj");
  
  if ($conn->connect_error) {
    die("ERROR: No se puede conectar al servidor: " . $conn->connect_error);
  } 
?>