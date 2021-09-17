<?php
  /*
  * Date: 2021-09-20 
  * Author: denis
  * Description: index page.
  */
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <LINK rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <title>Chat</title>
</head>
<body>
    <p>Welcome chat</p>
    <?php
    ?>
    <form action="messages.php" methode="POST">
        <div>
           <div id="chathist" class="chathist">outut
               <?php
                //echo $output;
               ?>

            </div>
            <div class="formulaire"> 
                <label for="username">Users:</label>
                <input type="text" id="username" name="username" value=""></input><br><br>
                <label for="message">Mess:</label>
                <textarea type="text" id="message" row="12" name="message" value=""></textarea><br><br>
                <input type="submit" value="send" name="send"  class="button">
                <button id="btn2">Append list item</button> 
           

            </div>
        </div>
        
    </form>

    <script>
        $(document).ready(function(){
        $("#btn2").click(function(){ $("ol").append("<li>Appended item</li>"); });
        });
    </script>
    
    <script>
        function chathist() {

            var loader = '<div class="lds-circle"><div></div></div>';    
            document.getElementById("chathist").innerHTML = loader;

            var u_name = document.getElementById("username").value;
            var u_msg = document.getElementById("message").value;
                        
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            document.getElementById("chathist").innerHTML = this.responseText;
            }
            };

            xhttp.open("POST", "messages.php.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("submit=true&username=" + u_name + "&message=" + u_msg  );
        }

    </script>  
    
</body>
</html>