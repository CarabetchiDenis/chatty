<?php
  /*
  * Date: 2021-09-20 
  * Author: denis
  * Description: index page.
  */
  //////
  //1. INPUT
  //2. VALIDATE INPUT
  //3. BUSINESS LOGIC 
  //4. OUTPUT
   
   //Start session
   session_start();
   require_once "conn.php";


   //input  defini variable
   $errors = Array();
   $output = "";
   //////
   $name = (isset($_POST['username']))?($_POST['username']): '';
   $msg =  (isset($_POST['message']))?($_POST['message']): '';
   ////
   //$name = $_POST['username'];////??
   //$msg = $_POST['message'];////???
   
   //processingform data when is submitted
   //if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    //VALIDATE USERNAME + MESSGAE   
    if(isset($_POST['send'])) {
        
        
        if(isset($_POST['username'])) {
            $username = htmlspecialchars($_POST['username']);
            if (empty($username)) {
            } else {
                $errors[] = "écrivez votre nom...";
            } 
        } else {
            $errors [] = "You did not submit forme....";
        }

        if (isset($_POST['message'])){
            $message = htmlspecialchars($_POST['message']);
            if (empty($message)) {
                } else {
                    $errors[] = "écrivez qqch... ";
                }
        } else {
            $errors [] = "Yor did not submit meg...";
        }
    
    }

    
      
    $query = "INSERT INTO messages (users, mesages) VALUES ('".$name."','".$msg."')";
    $exec = $dbc->query($query);

    
       
    



   $query = "SELECT * FROM  messages ORDER BY messages DESC LIMIT 100";
   $exec = $dbc->query($query);

   /*while ($row = $exec->fetch_array()) {
       $message = $row['message'];
       $username = $row['username'];
       $output .= "<br><div class='chathist'>" .$username.">" .$message."</div>";
   }*/


   
   echo "hello";
   //echo $errors;


?>
