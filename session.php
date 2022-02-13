<?php 
 if(isset($_SESSION["email"]))  
 {  
      if((time() - $_SESSION['last_login_timestamp']) > 86400) 
      {  
           header("location:deconnexion.php");  
      } 
      
     
    }
    if(empty($_SESSION["email"]))
    {
     
            header('location:index.php');
        }
   

   
    
?>