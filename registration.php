<?php include_once 'server.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/style.css">

     <?PHP
     $msg_error=null;
     $email=null;       
     $pass=null;
     $pass0= null;
     $nom=null;
     $nommsg=null;
     $emailmsg=null;
     $nompass=null;
     $nompass0=null;
    if(isset($_POST['submit'])){
    
      if(!empty($_POST['email']) &&!empty($_POST['cpassword'])&&!empty($_POST['password']) && !empty($_POST['nom'])){
      
      $email=$_POST['email'];       
      $pass= $_POST['cpassword'];
      $pass0= $_POST['password'];
      $nom=$_POST['nom'];
      $img=$_POST['img'];
      if( $pass==$pass0){
        $res=mysqli_query($conn," SELECT * FROM  comptes WHERE email = '$email'");
        if(mysqli_num_rows($res) != 0){
          echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>Email existe deja 
          </strong> 
        </div>
        
        <script>
          $(".alert").alert();
        </script>';
        }else{
      $hash = password_hash($pass, PASSWORD_DEFAULT);
    
                   
      
      $sql="INSERT INTO comptes VALUES ( '','$email', '$hash', '$nom','$img')";
      addstudent($conn,$sql);
      header("location:index.php");
  
 
   }
  }
   else{
    $msg_error= '<label  class ="text-danger mb-3 text-center">Veuillez vérifier votre mot de passe de confirmation </label>';
  }
  }
  else{
   if( $email==""){
     $emailmsg='<label  class ="text-danger mb-3 text-center"> veuillez remplir le champ obligatoire.</label>';
   }
  if ( $nom==""){
    $nommsg='<label  class ="text-danger mb-3 text-center"> veuillez remplir le champ obligatoire. </label>';

  }
  if ( $pass==""){
    $nompass='<label  class ="text-danger mb-3 text-center"> veuillez remplir le champ obligatoire.</label>';

  }
  if ( $pass0==""){
    $nompass0='<label  class ="text-danger mb-3 text-center"> veuillez remplir le champ obligatoire.</label>';

  }

  }

}
  
 
  
?>

<title>SIGN UP</title>
</head>
<body>

<div  class="container-fluid ">
         <div class="row justify-content-center ">
             <div class=" col-sm-12 col-md-6 col-lg-3">
       
       
      <form  class ="from-container" id ="form" method="POST" onsubmit="return validation()">
   <div class=" ">
            <h1 class="border-start px-2 m-3 border-info border-5 fw-bold fs-3">
               E-classe
            </h1>
          </div>
          <div class=" justify-content-centre ">
            <h2> SIGN UP </h2>
            <p class=" text-muted "> Enter your information  to register a new accont</p>  
          </div>

    <div class="form-group mb-3">
              <label >EMAIL :</label>
              <input type="text" class="form-control" name='email' id="email"  value='<?php echo $email;?>' >
              <span id="idemail" class="text-danger "></span>
          </div>

          <div class="form-group mt-3">
            <label >NAME :</label>
            <input type="text" class="form-control" name="nom"  id="nom"  value='<?php echo $nom;?>' >
            <span id="idnom" class="text-danger "></span>
          </div>

          <div class="form-group mt-3">
            <label >PASSWORD :</label>
            <input type="password" class="form-control" name="password" id="password"   value='<?php echo $pass0;?>'>
            <span id="idpassword" class="text-danger "></span>
          </div>
          <div class="form-group mt-3">
            <label >CONFIRME PASSWORD :</label>
            <input type="password" class="form-control" name="cpassword" id="cpassword"  value='<?php echo $pass;?>'>
            <span id="idcpassword" class="text-danger "></span>

          </div>
          <div class="form-group mt-3">
            <label >IMAGE :</label>
            <input type="file" class="form-control" name="img" >
          </div>

  
   
          <input type="submit"class="  btn-info w-100   " name="submit"> 

          <div class="mt-3 text-center">
            <span class="text-muted">
            have already an account? 
            </span>
             <a class="text-info text-decoration-underline" href="index.php"> <span>Login her</span></a> 
          </div>
  

</form>
</div>
    </div>
    </div>
  </main>


    
  <script src="js/sign.js"> </script>

 

     
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>