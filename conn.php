<?php
  /*
  * Date: 2021-09-14 
  * Author: denis
  * Description: connetcion db.
  */
  /* Database credentials. Assuming you are running MySQL
  server with default setting (user 'root' with no password) */

    define('DB_HOST','localhost:3306');
    define('DB_USER','root');
    define('DB_PASSWORD','');
    define('DB_NAME','chatty');
	// Create connection
	
	$dbc=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if($dbc === false){
     die("ERROR: Could not connect. " . mysqli_connect_error());
	}
?>
