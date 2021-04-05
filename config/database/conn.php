<?php

//---------------------
// DATABASE CONNECTION 
//---------------------

 mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

  $conn = new mysqli("localhost", "root", "", "ict_asset");

  if ($conn->connect_error) {
    die("Connection Failed: ".$conn->connect_error);
  }

  date_default_timezone_set("Asia/Manila");
  $is_deleted = 0;

?>