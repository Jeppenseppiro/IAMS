<?php 
	
	include "../../database/conn.php";

	$data = array();

	$sql = "SELECT * from non_consumable_item As a
	        INNER JOIN company As b ON a.companyid = b.companyid
	        INNER JOIN item_type As c ON a.item_code = c.code
	        WHERE a.is_deleted = ? 
	        ORDER BY a.itemid ASC";

	$stmt = $conn->prepare($sql); 
	$stmt->bind_param("i", $is_deleted);
    $stmt->execute();
    $result = $stmt->get_result();
    

	  while ($row = $result->fetch_assoc()) {

        $subdata = array();

        $month = date('m', strtotime($row["receive_date"]));
        $day = date('d', strtotime($row["receive_date"]));
        $year = date('Y', strtotime($row["receive_date"]));
        $display_month = date('M', mktime(0, 0, 0 , $month, 10));
		
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
	    $subdata[] = $row['code'];
	    $subdata[] = $row["type"];
	    $subdata[] = $row["equipment_code"];
	    $subdata[] = $row["brand"];
	    $subdata[] = $row["model"];
	    $subdata[] = $row["serial_no"];
		$subdata[] = $stat;
		$subdata[] = '<div class="dropdown">
	                	<span class="icon text-white-10">
		 				    <i class="fas fa-history" data-placement="bottom" title="History Record" data-toggle="modal" data-target="#history_modal" data-itemid="'.$row['itemid'].'" data-itemtype="'.$row['type'].'" data-code="'.$row['equipment_code'].'" data-brand="'.$row['brand'].'" data-model="'.$row['model'].'" data-sn="'.$row['serial_no'].'" data-status="'.$row["status"].'" data-supplier="'.$row["supplier"].'" data-amount="'.number_format($row["item_amount"],2).'" data-invoice="'.$row["invoice"].'" data-ponum="'.$row["payment_order_no"].'" data-podate="'.$row["payment_order_date"].'" data-receivedate="'.$row["receive_date"].'" data-rf="'.$row["rf"].'" data-warranty="'.$row["warranty"].'" data-location="'.$row["location"].'" id="item_history"></i>
					    </span> &nbsp;&nbsp;&nbsp;
						<button class="btn btn-primary dropdown-toggle btn-sm" type="button"
							id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">
							Show More
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<span class="dropdown-item"><b>OS: </b>'.$row["operating_system"].'</span>
							<span class="dropdown-item"><b>Processor: </b>'.$row["processor"].'</span>
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