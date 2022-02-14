<?php 

 session_start();



   $conn =mysqli_connect("localhost", "root", "", "e_classe_db");
   if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  function session(){
    if(isset($_SESSION["email"]))  
    {  
         if((time() - $_SESSION['last_login']) > 86400) 
         {  
              header("location:deconnexion.php");  
         } 
         
        
       }
       if(empty($_SESSION["email"]))
       {
        
               header('location:index.php');
           }
  }
  function addstudent($conn,$sql)
	{
   
    
    if (mysqli_query($conn, $sql)) {
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

  function getstudent ($conn){
    
    $sql =mysqli_query($conn," SELECT * FROM students ORDER BY id desc ") ;
    
    return $sql ;
      


  }

  function getcours ($conn){
    
    $sql =mysqli_query($conn," SELECT * FROM courses ORDER BY id desc  ") ;

    
    return $sql ;
      


  }

  function getpay ($conn){
    $sql =mysqli_query($conn," SELECT * FROM payment_details ORDER BY id desc") ;
    return $sql ;
  }





?>