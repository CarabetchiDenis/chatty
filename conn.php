<?php
 /*
 * Date: 2021-09-20
 * Author : Denis
 * Description : Connexion a DB
 */

 define('DB_HOST', 'localhost');
 define('DB_USER', 'root');
 define('DB_PASSWORD','');
 define('DB_NAME','chatty3');
 // Create connection

 $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
 if($dbc === false){
     die ("ERROR: Could not connect." .  mysqli_connect_error());
 }


?>