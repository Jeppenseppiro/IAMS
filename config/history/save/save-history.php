<?php

session_start();

include "../../database/conn.php";

$user = $_SESSION['UserID'];
$itemid = $_POST['itemid'];
$datesrf = $_POST['datesrf'];
$srf = $_POST['srf'];
$problem = $_POST['problem'];
$solution = $_POST['solution'];
$remarks = $_POST['remarks'];

$stmt = $conn->prepare("INSERT INTO item_history (itemid, datesrf, srf, problem, solution, remarks, added_by) VALUES (?,?,?,?,?,?,?)");

$stmt->bind_param("isssssi", $itemid, $datesrf, $srf, $problem, $solution, $remarks, $user);
$stmt->execute();

$stmt->close();
$conn->close();

?>