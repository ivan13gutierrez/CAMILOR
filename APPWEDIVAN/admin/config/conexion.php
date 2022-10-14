<?php
$conn = new mysqli("b6yh7iwmc8i1r3zjpjie-mysql.services.clever-cloud.com", "uzh3mxtezk08qryz", "uzh3mxtezk08qryz", "b6yh7iwmc8i1r3zjpjie");
  
  if ($conn->connect_error) {
    die("ERROR: No se puede conectar al servidor: " . $conn->connect_error);
  } 
?>