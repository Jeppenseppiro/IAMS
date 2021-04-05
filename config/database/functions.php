<?php

//-----------------------------
// FUNCTION FOR THE USER INFO
//----------------------------

function user_info()
{

    include "../config/database/conn.php";

    $sql= "SELECT * from user 
           WHERE is_deleted = ? && userid = ?";
    
    $stmt = $conn->prepare($sql); 
    $stmt->bind_param("ii", $is_deleted, $_SESSION['UserID']);
    $stmt->execute();
    $result = $stmt->get_result();
    
        while ($row  = $result ->fetch_assoc()) 
        {
        global $name, $uname;

            $name = $row['names'];
            $uname = $row['username'];    
        }

    $stmt->close();
    $conn->close();       
}


//---------------------------------------------------
// FUNCTION FOR RETREVING COMPANY INFO INTO DROPDOWN
//---------------------------------------------------

function company()
{
    include "../config/database/conn.php";

    $company_sql= "SELECT * from company 
                   WHERE is_deleted = ? 
                   ORDER BY companyid ASC";

    $company_stmt = $conn->prepare($company_sql); 
    $company_stmt->bind_param("i", $is_deleted);
    $company_stmt->execute();
    $company_result = $company_stmt->get_result();

        if ($company_result ->num_rows > 0) 
        {
            while ($company_row  = $company_result ->fetch_assoc()) 
            {
                echo ' <option value='.$company_row['companyid'].'>'.$company_row['abbreviation'].'</option>';
            }
        }

    $company_stmt->close();
    $conn->close();    
}



//---------------------------------------------------
// FUNCTION FOR RETREVING ITEM TYPE INFO INTO DROPDOWN
//---------------------------------------------------

function item_type()
{
    include "../config/database/conn.php";

    $item_sql= "SELECT * from item_type 
                WHERE is_deleted = ? 
                ORDER BY item_typeid ASC";

    $item_stmt = $conn->prepare($item_sql); 
    $item_stmt->bind_param("i", $is_deleted);
    $item_stmt->execute();
    $item_result = $item_stmt->get_result();

        if ($item_result ->num_rows > 0) 
        {
            while ($item_row  = $item_result ->fetch_assoc()) 
            {
                echo ' <option value='.$item_row['code'].'>'.$item_row['type'].'</option>';
            }
        } 

    $item_stmt->close();
    $conn->close();    
}
   
?>
