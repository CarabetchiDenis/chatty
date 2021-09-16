<?php

    //1. INPUT
    //2. VALIDATE INPUT
    //3. BUSINESS LOGIC (tvq tps)
    //4. OUTPUT

    //getting the input
    $username = "";
    $message = "";


    //input validation verif

    $query= "SELECT * FROM users LIMIT 100";
    $exec = $dbc->query($query); 

    ///isert 

    $query = "INSERT INTO users (users, msg )
     VALUES ('?', '?')";


    $name = $_POST['username'];
    $msg =$_POST['message'];
       if($name!= "" && $msg != ""){
        $sql = $exec->query("INSERT INTO users (users, msg)
        VALUES ('$name','$msg')");
        echo "ok";
    } else {
        echo "Error champs vides ";
    }

    mysqli_close($exec);

 
   



    /*if (isset($_POST['submit'])){
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
    }*/*
         



    /////OUTPUT
    $output = "";
    while ($row = $exec->fetch_array()) {
    $message = $row['msg'];
    $username = $row['users'];
    $output .= "<br><div class='message'> " . $username . " > " . $message . "</div>";
    }




    
?>