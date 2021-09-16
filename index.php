<?php
  /*
  * Date: 2021-09-14 
  * Author: denis
  * Description: index page.
    //1. INPUT
    //2. VALIDATE INPUT
    //3. BUSINESS LOGIC (tvq tps)
    //4. OUTPUT
  */

   require_once "conn.php";


   //Initialize the session
   session_start();
    
   $query= "SELECT * FROM users LIMIT 100";
   $exec = $dbc->query($query); 

   $sql = "INSERT INTO users (users, msg )
   VALUES ('?', '?')";
   
   
   
   
   $output = "";
   while ($row = $exec->fetch_array()) {
   $message = $row['msg'];
   $username = $row['users'];
   $output .= "<br><div class='message'> " . $username . " <br> " . $message . "</div>";
   }
  
?>


<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Chatty</title>
            <link rel="stylesheet" href="styles.css">
        </head>
    <body>
        <div id="chathist">
            <?php
               echo $output;
            ?>
        </div><br><br>
        <form>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" value=""><br><br>
            <label for="message">Message</label>
            <textarea type="text" id="message" rows="5" name="message" value="0"></textarea><br><br>
            <input type="submit" value="Send" onclick="get_receipt()">
        </form> <!--
        <script>
            function get_receipt() {

                var loader = <div class="lds-circle"><div></div></div>;
                document.getElementById("chathist").innerHTML = loader;

                var u_username = document.getElementById("username").value;;
                var m_message = document.getElementById("message").value;;

                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("chathist").innerHTML = this.responseText;
                    }
                };

                xhttp.open("POST", "process.php", true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send("submit=true&username=" + u_username + "&message=" + m_message);
                }
        </script>  -->
    </body>
</html>
