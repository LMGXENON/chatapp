<?php
  $hostname = "localhost";
  $username = "id17717647_chatapp";
  $password = "0b(Vp=_NFET1EG-W";
  $dbname = "id17717647_xenzai";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
