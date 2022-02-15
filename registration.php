<?php include_once 'server.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
     <link rel="stylesheet" href="css/registration.css">

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
      if( $pass==$pass0){
      $hash = password_hash($pass, PASSWORD_DEFAULT);
    
                   
      
      $sql="INSERT INTO comptes VALUES ( '','$email', '$hash', '$nom')";
      addstudent($conn,$sql);
      header("location:index.php");
  
 
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

<title>registration</title>
</head>
<body>


<form method="POST">
 

   
    <div  class="justify-content-centre">
        <h2 >SIGN UP</h2>
    </div>
    <label> <p class="label-txt">ENTER YOUR EMAIL</p>
    <input type="email" class="input" name="email"  value='<?php echo $email;?>'required>
    <div class="line-box">
      <div class="line">
      </div>
      <?php echo  $emailmsg;?>
    </div>
  </label>
  <label>
    <p class="label-txt">ENTER YOUR NAME</p>
    <input type="text" class="input" name="nom"   value='<?php echo $nom;?>'required>
    <div class="line-box">
      <div class="line"></div>
      <?php echo  $nommsg;?>
    </div>
  </label>
 

  <label>
    <p class="label-txt" name="passworde">ENTER YOUR PASSWORD </p>
    <input type="password" class="input" name="password"   value='<?php echo $pass0;?>'required>
    <div class="line-box">
      <div class="line"></div>
    </div>
    <?php echo  $nompass0;?>
    
  </label>

  <label>
    <p class="label-txt" name="passworde2">CONFIRM YOUR PASSWORD</p>
    <input type="password" class="input" name="cpassword"   value='<?php echo $pass;?>'required>
    
    <div class="line-box">
      <div class="line"></div>
      
    </div>
    <?php echo  $nompass;?></label>
    <strong ><?php echo $msg_error; ?></strong>
  
  <input type="submit" name="submit"  class="btn-info  ">

</form>
  


    
   
 

     
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

$('.input').focus(function(){
  $(this).parent().find(".label-txt").addClass('label-active');
});

$(".input").focusout(function(){
  if ($(this).val() == '') {
    $(this).parent().find(".label-txt").removeClass('label-active');
  };

});

});
</script>
</body>
</html>