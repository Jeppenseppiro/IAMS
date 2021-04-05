<?php

include "../../database/conn.php";

$username = $_POST['username'];
$name = $_POST['fullname'];
$password = $_POST['password'];
session_start();
$userid = $_SESSION['UserID'];

$password_hashed = password_hash($password, PASSWORD_DEFAULT);

date_default_timezone_set('Asia/Manila');
$date = date("Y-m-d h:i:s");

$sql = "UPDATE user SET names = ?, username = ?, passwords = ?, updated_on = ? WHERE userid = ?";

$stmt = $conn->prepare($sql); 
$stmt->bind_param("ssssi", $name, $username, $password_hashed, $date, $userid);
$stmt->execute();

$stmt->close();
$conn->close();
    
?>