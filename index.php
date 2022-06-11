<?php
   include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/survivor.css" />


</head>
   <body style="background-color:black;">  
   <div style="position:absolute; left:10%; top:20%;">

      <h1>Open-source software project by 21700496 Lee Do kyeong</h1>

   </div>

   <h2></h2>

   <h3>
      <!-- <marquee> has been outlawed and deprecated for a while, now. We'll do evil things with CSS, to mimic it. -->
      <span  style="position:absolute; left:40%; top:40%;" >
         <span  >Please input your name!</span>
      </span>
   </h3>
   <div  class="row">
        <div style="position:absolute; left:40%; top:50%;">
         <form method="POST" action="index.php">
            <div></div>
            <input type="text" name="name" placeholder="Enter your name" required=""> 
            <input type="submit" style="color: balck;" name="submit" value="Send it"/>
         </form>
      </div>
   </div>

   <?php
      if(isset($_POST['submit'])){
         $name = $_POST['name'];
         $query = "INSERT INTO User (name) VALUES ('$name')";
         $run = $con -> query($query);
		 if($run){
      		echo("<script>location.href='./main.html';</script>"); 

		 }
      }
   ?> 
   
</body>
</html>