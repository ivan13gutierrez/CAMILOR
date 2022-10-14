<?php
$conn = new mysqli("localhost", "root", "", "bdsitio");
  
  if ($conn->connect_error) {
    die("ERROR: No se puede conectar al servidor: " . $conn->connect_error);
  } 
?>