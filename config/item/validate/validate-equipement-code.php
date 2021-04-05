<?php

include "../../database/conn.php";

$code = $_POST['code'];

$sql = "SELECT * FROM non_consumable_item Where item_code = ?";

	$stmt = $conn->prepare($sql); 
	$stmt->bind_param("s", $code);
    $stmt->execute();
    $result = $stmt->get_result();

    echo $num = $result->num_rows+1;
?>