<?php 
	
	include "../../database/conn.php";

	$data = array();
	$is_deleted = 0;

	$sql = "SELECT * from item_deploy As a
			INNER JOIN company As b on a.companyid = b.companyid
	        WHERE a.is_deleted = ?
	        GROUP BY a.user_lname , a.user_fname
	        ORDER By a.user_lname ASC";

	$stmt = $conn->prepare($sql); 
	$stmt->bind_param("i", $is_deleted);
    $stmt->execute();
    $result = $stmt->get_result();
    

	  while ($row = $result->fetch_assoc()) {

        $subdata = array();

		$subdata[] = $row['item_deployid'];
		$subdata[] = $row['abbreviation'];
	    $subdata[] = $row['user_lname'].', '.$row['user_fname'];
	    $subdata[] = $row['user_location'];
		$subdata[] = '<div>
		                <a class="btn btn-primary btn-icon-split btn-sm" data-fname="'.$row['user_fname'].'" data-lname="'.$row['user_lname'].'" id="print_receipt">
	                        <span class="icon text-white-50">
	                        <i class="fas fa-print"></i>
	                        </span>
	                        <span class="text">Print IT Asset Receipt</span>
	                    </a> 
				     </div> ';
	
	    $data[] = $subdata;

	}

	$return_arr=array("data" =>  $data);

	echo json_encode($return_arr);

	$stmt->close();
    $conn->close();

?>