<?php
/*
  * Date: 2021-09-14 
  * Author: denis
  * Description: index page.
 */

require_once('conn.php');

//connect to the database
$dbc=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

?>
<?php

$user= (isset($_POST['user']))?($_POST['user']): '';
$msg= (isset($_POST['msg']))?($_POST['msg']): '';

$erreur = 'false';
$message = '';

if(isset($_POST['valider']))
{
  {
      $query= "INSERT INTO users (user,msg) 
      VALUES('".$user."','".$msg."') ";
      $data=mysqli_query($dbc,$query); 
      if ($data === TRUE) {
    
      } else {
        echo "Error: " . $query . "<br>" . $dbc->error;
      }
  }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" href="styles.css">
	
</head>
<script>
  function show_func(){
 
  var element = document.getElementById("");
  element.scrollTop = element.scrollHeight;
  
 }

</script>
<form id="myform" action="index.php" method="POST" >
<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db_name = "chatty";
    $con = new mysqli($host, $user, $pass, $db_name);
    
    $query = "SELECT * FROM users";
    $run = $con->query($query);
    $i=0;
    
    while($row = $run->fetch_array()) :
    if($i==0){
    $i=5;
    $first=$row;
    
    ?>

    <?php echo $row['msg']; ?> <br/>
    <?php echo $row['user']; ?>
   
   <br/><br/>

<?php
  }
  else
  {
  if($row['user']!=$first['user'])
  {
?>
    
  <?php echo $row['msg']; ?><br>
  <?php echo $row['user']; ?>,

<br/><br/>
<?php
}
else
{
?>

  <?php echo $row['msg']; ?>
  <?php echo $row['user']; ?>,

<br/><br/>

<?php
}
}
endwhile;
?>

<div class="row">
	
	<div id="receipt" class="column" style="background:#ca9898;">
	
     Messages...	
	  
   </div>
	  <input type="submit" value="refech" name="refrech">
	
	  <hr>
	
  <div id="order_form" class="form">
	  <label for="user">Name:</label>
	  <input type="text" id="user" class="form" name="user">
	</div><br>
  <div class="form">
    <label for="comment">Message:</label>
    <textarea class="form" id="msg" rows="5" name="msg"></textarea>
    
    <p class="bouton"><input type="submit" name="valider" onclick="get_receipt()"
    value="SEND" checked/>
    </p>    
  </div>        
</div>
</form>
 </body>
</html>
