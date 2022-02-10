<?php include_once 'server.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
     <link rel="stylesheet" href="css/registration.css">



<title>registration</title>
</head>
<body>


<form>
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
    <p class="label-txt">ENTER YOUR PASSWORD</p>
    <input type="text" class="input" name="password" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>

  <label>
    <p class="label-txt">CONFIG  YOUR PASSWORD</p>
    <input type="text" class="input" name="cpassword" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <input type="submit" name="submit" value="submit" class="btn-info  ">

</form>
  


    
    <?PHP
    if(isset($_POST['submit'])){

      $email=$_POST['email'];       
      $pass= $_POST['cpassword'];
      $pass0= $_POST['password'];
      $nom=$_POST['nom'];
      $hash = password_hash($pass, PASSWORD_DEFAULT);
      $sql=" INSERT INTO comptes(email,pass,nom) VALUES ('$email','$hash','$nom')";
        
     if (mysqli_query($conn, $sql)) {
       echo "b1";
 
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
 
     }
 
  
 
   }
 
   else {
   
 
    }
  

?>

<?php   mysqli_close($conn); ?>  

     
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