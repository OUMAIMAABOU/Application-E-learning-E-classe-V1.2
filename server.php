<?php 

 session_start();
 
   $conn =mysqli_connect("localhost", "root", "", "e_classe_db");
   if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  function session(){
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
  }
  function addstudent($con,$sql)
	{
   
       
    if (mysqli_query($con, $sql)) {
  echo ' <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <strong>bien ajouter
        </strong> 
      </div>
      
      <script>
        $(".alert").alert();
      </script>';
      

   } else {
       echo "Error: " . $sql . ":-" . mysqli_error($conn);

    }
	}



?>