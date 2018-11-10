<?php  
 //entry.php  
 session_start();  
 if(!isset($_SESSION["login"]))  
 {  
      header("location:login.php");  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Autenticado e session validada</h3>  
                <br />  
                <?php  
                echo '<h1>Welcome - '.$_SESSION["login"].'</h1>';  
                echo '<label><a href="sair.php">Logout</a></label>';  
                ?>  
           </div>  
      </body>  
 </html>  