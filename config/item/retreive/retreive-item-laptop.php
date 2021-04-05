<?php 
	
	include "../../database/conn.php";

	$data = array();
	$is_deleted = 0;
	$item_code = "LC";

	$sql = "SELECT * from item As a
	        INNER JOIN company As b ON a.companyid = b.companyid
	        INNER JOIN item_type As c ON a.item_code = c.code
	        WHERE a.is_deleted = ? && a.item_code = ?
	        ORDER BY a.itemid ASC";

	$stmt = $conn->prepare($sql); 
	$stmt->bind_param("is", $is_deleted, $item_code);
    $stmt->execute();
    $result = $stmt->get_result();
    

	  while ($row = $result->fetch_assoc()) {

        $subdata = array();

        $month = date('m', strtotime($row["receive_date"]));
        $day = date('d', strtotime($row["receive_date"]));
        $year = date('Y', strtotime($row["receive_date"]));
        $display_month = date('M', mktime(0, 0, 0 , $month, 10));
        //$time = date('h:i:s a', strtotime($row["added_on"]));

        // $birth_month = date('m', strtotime($row["date_of_birth"]));
        // $birth_day = date('d', strtotime($row["date_of_birth"]));
        // $birth_year = date('Y', strtotime($row["date_of_birth"]));
        // $display_birth_month = date('M', mktime(0, 0, 0 , $birth_month, 10));

		if ($row["status"] == "ACTIVE") {
			$stat = '<span class="text-success"><b>ACTIVE</b></span>';
		} 
		else if ($row["status"] == "AVAILABLE") {
			$stat = '<span class="text-warning"><b>AVAILABLE</b></span>';
		}
		else if ($row["status"] == "DAMAGED") {
			$stat = '<span class="text-danger"><b>DAMAGED</b></span>';
		}
		
		$subdata[] = $row['itemid'];
	    $subdata[] = $row['abbreviation'];
	    $subdata[] = $row["type"];
	    $subdata[] = $row["equipment_code"];
	    $subdata[] = $row["brand"];
	    $subdata[] = $row["model"];
	    $subdata[] = $row["serial_no"];
	    $subdata[] = $row["operating_system"];
	    $subdata[] = $row["hdd"];	  
	    $subdata[] = $row["ram"];	  
	    $subdata[] = $row["video_card"];	  
	    $subdata[] = $row["processor"];
	    $subdata[] = $row["motherboard"];
	    $subdata[] = $display_month.'. '.$day.', '.$year;
	    $subdata[] = $row["receive_no"];
	    $subdata[] = $row["supplier"];
	    $subdata[] = $row["payment_order_no"];
	    $subdata[] = $row["payment_order_date"];
	    $subdata[] = $row["invoice"];
		$subdata[] = $stat;
		$subdata[] = '<div class="dropdown">
						<button class="btn btn-primary dropdown-toggle btn-sm" type="button"
							id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">
							Show More
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<span class="dropdown-item"><b>OS: </b>'.$row["operating_system"].'</span>
							<span class="dropdown-item"><b>HDD: </b>'.$row["hdd"].'</span>
							<span class="dropdown-item"><b>RAM: </b>'.$row["ram"].'</span>
							<span class="dropdown-item"><b>Video Card: </b>'.$row["video_card"].'</span>
							<span class="dropdown-item"><b>Processor: </b>'.$row["processor"].'</span>
							<span class="dropdown-item"><b>MotherBoard: </b>'.$row["motherboard"].'</span>
							<span class="dropdown-item"><b>Received Date: </b>'. $display_month.'. '.$day.', '.$year.'</span>
							<span class="dropdown-item"><b>Receiving No.: </b>'.$row["receive_no"].'</span>
							<span class="dropdown-item"><b>Supplier: </b>'.$row["supplier"].'</span>
							<span class="dropdown-item"><b>Payment No.: </b>'.$row["payment_order_no"].'</span>
							<span class="dropdown-item"><b>Invoice No.: </b>'.$row["invoice"].'</span>
						</div>
				  </div> ';

	    $data[]=$subdata;

	}

	$return_arr=array("data" =>  $data);

	echo json_encode($return_arr);

	$stmt->close();
    $conn->close();

?>