<?php include_once 'server.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="css/style.css">

</head>
<body >
    <main>
        <div  class="container-fluid ">
         <div class="row justify-content-center ">
             <div class=" col-sm-12 col-md-6 col-lg-3">
                    <form class="from-container" methode="POST" action="">
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
                                <input type="email" class="form-control" placeholder="ENTER YOUR EMAIL" name="email" >
                            
                            </div>
                                <div class="mb-4">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="ENTER YOUR EMAIL PASSWORD" name ="password">
                            </div>
                            <div class="mb-4">
                                <button  type="button" onclick="window.location.href='liste.php'" class="btn-info  " style=" width: 100%;" >
                                    sign in
                                </button>
                            
                            </div>
                            <div class="mb-3">
                                <label>Forgot your password <a href="#"> Reset password</a></label>

                            </div>                               
                        </div>
                    </form>     
              </div>
          </div>     
            
        </div>
    </main>
    <?php
 
    if(!empty($_POST['email'])&&!empty($_POST['password'])){
        $email=$_POST['email'];
        $pass=$_POST['password'];
      $res=mysqli_query($conn," SELECT * FROM  login WHERE email ='$email' AND password ='$pass'");
      if (mysqli_query($conn, $sql)) {

      }
      if(mysqli_num_rows($res)==1){
          $row=mysqli_fetch_array($res);
          if( $row['email']==$email && $row['password']==$email){
          
          }
         
      }
      else{
        echo "n'existe pas";
      }
    }
    /* try{
      $pdo=new PDO("mysql:host=localhost;dbname=bd","user","password");
   }
   catch(PDOException $e){
      echo $e->getMessage();
   } */
    ?>
    <?php   mysqli_close($conn); ?>  
 </body>
</html>