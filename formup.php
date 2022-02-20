<?php include_once 'server.php';?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <link  href="css/dashboord.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    </head>
  
    <body>
  
                <form  method="POST" action =""  >

                <?php
 

 $query = mysqli_query ($conn,"SELECT * FROM courses WHERE  id ='" . $_GET["id"] . "'");

 $row = mysqli_fetch_array ($query);
 ?>
              
                  <div class="container "  style=" margin-top: 203px;"> 
                   <div class="col-md-12">
                      <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'] ; ?>" >

                       
                        <input type="text" placeholder="title de course" class="form-control my-3" name="title"  value="<?php echo $row['title_course'] ; ?>">
                    

                   
                        <input type="text" placeholder="Durée de course "class="form-control my-3" name="dur"  value="<?php echo $row['duree_course'] ; ?>">
                    

                   
                        <input type="text" placeholder="prix de course" class="form-control my-3" name="prix" value="<?php echo $row['prix_course'] ; ?>">
                
                        <div class="my-3">
                       
                        <div class="col-12">
                   <input type="submit" name="update" value="UPDATE" class="form-control me-2 btn btn-primary text-light">
                        </div>
                </div>
                  
                </form>    
    
         
 
  <?php 

      if(!empty($_POST['id']) && !empty($_POST['title']) && !empty($_POST['dur']) && !empty($_POST['prix']) ){    

$id=$_POST['id'];
$title=$_POST['title'];
$dur=$_POST['dur'];
$prix= $_POST['prix'];


$sql="UPDATE courses 
SET title_course = '$title', duree_course = '$dur',prix_course = '$prix' WHERE id ='" .$id . "'";		
 if (mysqli_query($conn, $sql)) {
  
  header("location: course.php");

  } else {
echo "Error updating record: " . mysqli_error($conn);
}
      }
?>
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>  

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script src="js/bootstrap.bundle.min.js" ></script>
      <script>
        var el = document.getElementById("dashboard");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>           
            
  </body>
</html>


<?php mysqli_close($conn);?>