<?php include_once 'server.php';?>
<?php 
 
 ?>

  <?php
  $msg_error=null;
  $msg_error1=null;
  $msg_error2=null;

       if(isset($_POST['connect'])){
        {  
              $_SESSION["email"] = $_POST['email'];
              $_SESSION['last_login'] = time();  
                 
         } 
           if(!empty($_POST['email']) && !empty($_POST['password'])){
            
   
           $email=mysqli_real_escape_string($conn,$_POST['email']);
           $pass= mysqli_real_escape_string($conn,$_POST['password']);
         
           $res=mysqli_query($conn," SELECT * FROM  comptes WHERE email = '$email'");
           if(mysqli_num_rows($res) != 0){
            
            $rows=mysqli_fetch_assoc($res);
                       
            $hash_from_db=$rows['pass'];
                    if(password_verify($pass,$hash_from_db)==true){
                                   
                    $_SESSION["name"]= $rows['nom'];
                    $_SESSION["email"]=$_POST['email'];
                    $_SESSION["img"]= $rows['image'];
                    if(!empty($_POST["remember"])) {
                        
                        setcookie ("member_email",$email,time()+2592000);
                        setcookie ("member_password",$pass,time()+ 2592000);

                            }
                            else  
                            {  
                            if(isset($_COOKIE["member_email"]))   
                            {  
                            setcookie ("member_email","");  
                            }  
                            if(isset($_COOKIE["member_password"]))   
                            {  
                            setcookie ("member_password","");  
                            }  
                        
                            }  
       
        header('location:liste.php');
           }
         else{
              $msg_error= '<div class="alert alert-danger" role="alert"> Email ou mot de passe incorrect!</div>'; 
          } 
        }
          
      
        }else{
            if ($_POST['email']=="") {
                $msg_error1= '<div class="alert alert-danger" role="alert">veuillez remplir le champ obligatoire!</div>';
            }
            if ($_POST['password']=="") {
                $msg_error2= '<div class="alert alert-danger" role="alert"> veuillez remplir le champ obligatoire!</div>';
            }
        }
       }
      
       ?> 
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
                                   <strong> <?php  echo $msg_error;  ?> </strong>
                                </div>
                            </div>    
                            <div class="mb-4">
                                <label>Email </label>
                                <input type="email" class="form-control" placeholder="ENTER YOUR EMAIL" name="email" 
                                value="<?php if(isset($_COOKIE["member_email"])) { echo $_COOKIE["member_email"]; } ?>" required>
                            
                            </div>
                            <?php   echo $msg_error1;?>
                                <div class="mb-4">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="ENTER YOUR EMAIL PASSWORD" name ="password"
                                value="<?php if(isset($_COOKIE["member_password"])) { echo $_COOKIE["member_password"]; } ?>" required>
                            </div>
                            <?php   echo $msg_error2;?>
                            <div class="mb-4">  
                                <input type="checkbox" name="remember" <?php if(isset($_COOKIE["member_email"])) { ?> checked <?php } ?> />  
                                <label for="remember-me">Remember me</label>  
                            </div> 
                                                   
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