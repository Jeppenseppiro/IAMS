<?php

session_start();

include "../../database/conn.php";

$user = $_SESSION['UserID'];
$company = $_POST['companies'];
$received_date = $_POST['received_date'];
$item_type = $_POST['item_type'];
$receiving_no = $_POST['receiving_no'];
$equipment_code = $_POST['equipment_code'];
$brand = $_POST['brand'];
$purchase_no = $_POST['purchase_no'];
$model = $_POST['model'];
$purchase_date = $_POST['purchase_date'];
$serial_no = $_POST['serial_no'];
$status = $_POST['status'];
$os = $_POST['os'];
$processor = $_POST['processor'];
$supplier = $_POST['supplier'];
$invoice = $_POST['invoice'];
$amount = $_POST['amount'];
$locations = $_POST['locations'];
$warranty = $_POST['warranty'];
$rf = $_POST['rf'];


$insert_item = $conn->prepare("INSERT INTO non_consumable_item (companyid, item_code, equipment_code, brand, model, serial_no, location, operating_system, processor, receive_date, receive_no, supplier, payment_order_no, payment_order_date, item_amount, invoice, warranty, rf, status, added_by) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

$insert_item->bind_param("issssssssssssssssssi", $company, $item_type, $equipment_code, $brand, $model, $serial_no, $locations, $os, $processor, $received_date, $receiving_no, $supplier, $purchase_no, $purchase_date, $amount, $invoice, $warranty, $rf, $status, $user);
$insert_item->execute();
$insert_item->close();


//----------------------------------------------------------------------------------
// IF THE SAVED ITEM IS DESKTOP OR LAPTOP IF NOT THIS FUNCTION WILL NOT BE EXECUTED
//----------------------------------------------------------------------------------


if ($item_type == "LC" || $item_type == "DC") {
	
	$insert_addon = $conn->prepare("INSERT INTO item_addon (addonname, asset_code, serial_no, brand, model, description, receive_date, receive_no, supplier, payment_order_no, payment_order_date, item_amount, invoice, warranty, rf, status, added_by) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

	$insert_addon->bind_param("ssssssssssssssssi", $addon_name, $equipment_code, $addon_serialnumber, $addon_brand, $addon_model, $addon_description, $received_date, $receiving_no, $supplier, $purchase_no, $purchase_date, $addon_amount, $invoice, $warranty, $rf, $status, $user);

	$addon_brand = $_POST['ram_brand'];
	$addon_model = $_POST['ram_model'];
	$addon_serialnumber = $_POST['ram_serialnumber'];
	$addon_description = $_POST['ram_description'];
	$addon_amount = $_POST['ram_amount'];
	$addon_name = "RAM";
	$insert_addon->execute();

	$addon_brand = $_POST['storage_brand'];
	$addon_model = $_POST['storage_model'];
	$addon_serialnumber = $_POST['storage_serialnumber'];
	$addon_description = $_POST['storage_description'];
	$addon_amount = $_POST['storage_amount'];
	$addon_name = "INTERNAL-HDD";
	$insert_addon->execute();

	$addon_brand = $_POST['videocard_brand'];
	$addon_model = $_POST['videocard_model'];
	$addon_serialnumber = $_POST['videocard_serialnumber'];
	$addon_description = $_POST['videocard_description'];
	$addon_amount = $_POST['videocard_amount'];
	$addon_name = "VIDEOCARD";
	$insert_addon->execute();

	$addon_brand = $_POST['board_brand'];
	$addon_model = $_POST['board_model'];
	$addon_serialnumber = $_POST['board_serialnumber'];
	$addon_description = $_POST['board_description'];
	$addon_amount = $_POST['board_amount'];
	$addon_name = "MOTHERBOARD";
	$insert_addon->execute();

	$addon_brand = $_POST['psu_brand'];
	$addon_model = $_POST['psu_model'];
	$addon_serialnumber = $_POST['psu_serialnumber'];
	$addon_description = $_POST['psu_description'];
	$addon_amount = $_POST['psu_amount'];
	$addon_name = "POWER-SUPPLY";
	$insert_addon->execute();

	$insert_addon->close();

}
	
$conn->close();
header("location: ../../../pages/non_consumable.php");
exit;

?>