<?php 
session_start();
	
include "../database/conn.php";

$user = $_SESSION['UserID'];
$id = $_POST['ids'];
$fname =  $_POST['fname'];
$lname = $_POST['lname'];
$location = $_POST['location'];
$company = $_POST['company'];
$num = count($id);
$deploy_temp = "Deployed";
$deploy_temp1 = "Deploy Item";


$deploy_item_to = "Deploy item to ".$lname.", ".$fname." of ".$location;

$date = date("Y-m-d");

for ($i=0; $i <$num; $i++) { 

	$sql = $conn->prepare("INSERT INTO item_deploy (companyid, user_lname, user_fname, user_location, itemid, added_by) VALUES (?,?,?,?,?,?)");
	$sql->bind_param("isssii", $company, $lname, $fname, $location, $id[$i], $user);

	$sql_history = $conn->prepare("INSERT INTO item_history (itemid, datesrf, problem, solution, remarks, added_by) VALUES (?,?,?,?,?,?)");
	$sql_history->bind_param("issssi", $id[$i], $date, $deploy_temp1, $deploy_item_to, $deploy_temp, $user);

	$sql->execute();
	$sql_history->execute();	
}


//$sql->close();
$sql_history->close();
$conn->close();

?>