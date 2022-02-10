<?php include_once 'server.php';?>
<?php session_start() ; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="css/style.css">
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">


</head>

<body >
  
    <main>
        <div  class="container-fluid ">
         <div class="row justify-content-center ">
             <div class=" col-sm-12 col-md-6 col-lg-3">
                    <form class="from-container" name ="forma1" method="POST" action="">
                        <div class="form-group"> 
                                    
                            <div class="mb-4">
                                <h1>E-classe</h1>
                                <div  class="justify-content-centre">
                                    <h2 >SIGN IN</h2>
                                    <p>Enter your credentials to acces your account</p>
                                </div>
                            </div>    
                            <div class="mb-4">
                                <label>Email </label>
                                <input type="email" class="form-control" placeholder="ENTER YOUR EMAIL" name="email" required>
                            
                            </div>
                                <div class="mb-4">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="ENTER YOUR EMAIL PASSWORD" name ="password" required>
                            </div>
                            <?php
       
       if(isset($_POST['connect'])){
           if(!empty($_POST['email']) && !empty($_POST['password'])){
   
           $email=mysqli_real_escape_string($conn,$_POST['email']);
           $pass= mysqli_real_escape_string($conn,$_POST['password']);
          
           $res=mysqli_query($conn," SELECT * FROM  comptes WHERE email = '$email' AND pass ='$pass'");
           $rows=mysqli_fetch_assoc($res);
           if(is_array($rows)){
              
         
           $_SESSION["name"]= $rows['nom'];
           $_SESSION["email"]=$rows['email'];
          
           header('location:liste.php');
           }
          else{
             echo '<label  class ="text-danger mb-3 text-center"> Email ou mot de passe incorrect</label>';
              
          }
      
        }
       }
      
        
      
   
       ?> 
                            <div class="mb-4">
                            <input type="submit" name="connect" value="connect" class="btn-info  " style=" width: 100%;">
    
                              
                            
                            </div>
                            <div class="mb-3">
                                <label>you don't have an account? <a href="registration.php">Sign up</a></label>

                            </div>                               
                        </div>
                    </form>     
              </div>
          </div>     
            
        </div>
    </main>

    <?php   mysqli_close($conn); ?>  
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>



 </body>
</html>