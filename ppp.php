<?php 
include 'conn.php';

    $data = array();
    
	$sql = "SELECT * FROM users";
	$exec = $dbc->query($sql);
	if ($exec->num_rows > 0) {
		while($row = $exec->fetch_assoc()) {
            $data["users"] = $row["users1"];
            $data["msg"] = $row["msg1"];
            array_push( $data);	
    }    
	} else {
		echo "0 results";
	}
	mysqli_close($dbc);

