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
    if(isset($_POST['submit'])){
      if(!empty($_POST['email']) &&!empty($_POST['cpassword'])&&!empty($_POST['password']) && !empty($_POST['nom'])){
      
      $email=$_POST['email'];       
      $pass= $_POST['cpassword'];
      $pass0= $_POST['password'];
      $nom=$_POST['nom'];
      $hash = password_hash($pass, PASSWORD_DEFAULT);
      if( $pass==$pass0){
                   
      
      $sql="INSERT INTO comptes VALUES ( '','$email', '$hash', '$nom')";
      addstudent($conn,$sql);
      header("location:index.php");
  
 
   }
   else{
   echo "verfie pass";
   }
  }
  echo '<div class="alert alert-danger" role="alert">
     Remplir toutes champs
</div>';
}
  
 
  
?>

<title>registration</title>
</head>
<body>


<form method="POST">
  <label>
    <p class="label-txt">ENTER YOUR EMAIL</p>
    <input type="email" class="input" name="email" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">ENTER YOUR NAME</p>
    <input type="text" class="input" name="nom" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
 

  <label>
    <p class="label-txt" name="passworde">ENTER YOUR PASSWORD</p>
    <input type="text" class="input" name="password" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>

  <label>
    <p class="label-txt" name="passworde2">CONFIG  YOUR PASSWORD</p>
    <input type="text" class="input" name="cpassword" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
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