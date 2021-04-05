<?php

include "../../database/conn.php";

$user = $_POST['user'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM user Where username = ?";

$stmt = $conn->prepare($sql); 
$stmt->bind_param("s", $user);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows != 0 ) {

    while ($row = $result->fetch_assoc()) 
    {
        if (password_verify($pass, $row['passwords']))
        {
            echo "accepted";

            session_start();
            $_SESSION['UserID'] = $row["userid"];
        }
        else{
            echo "xpass";
        }
    }
}
else {
    echo "xuser";
}
    
?>