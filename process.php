<?php

    //1. INPUT
    //2. VALIDATE INPUT
    //3. BUSINESS LOGIC (tvq tps)
    //4. OUTPUT

    //getting the input
    $username = "";
    $message = "";


    //input validation verif
    if (isset($_POST['submit'])){
        if (isset($_POST['username'])) {
            $username = htmlspecialchars($_POST['username']);
        }
        
    }


    if (isset($_POST['submit'])){
        if (isset($_POST['message'])) {
            $message = htmlspecialchars($_POST['message']);
            if (stren($message) < 140){
                echo 'ok';
            }
        }else {
            $errors  = "140 caractères max = 140";
        }
    }
         



    /////OUTPUT
    $output = "";
    while ($row = $exec->fetch_array()) {
    $message = $row['msg'];
    $username = $row['users'];
    $output .= "<br><div class='message'> " . $username . " > " . $message . "</div>";
    }




    
?>