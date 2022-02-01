<?php include_once 'server.php';?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">

    </head>
    <?php
 

    $query = mysqli_query ($conn,"SELECT * FROM courses WHERE  id ='" . $_GET["id"] . "'");

    while ($row = mysqli_fetch_array ($query)) 
    {
        
    ?>
    <body style=" margin-top: 203px;">
        
                <form  method="POST" action ="">

            
              
                  <div class="container col-sm-12 col-md-6 col-lg-8 ">  <div class="col-md-6">
                      <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'] ; ?>" >

                       
                        <input type="text" placeholder="title de course" class="form-control my-3" name="title"  value="<?php echo $row['title_course'] ; ?>">
                    

                   
                        <input type="text" placeholder="Durée de course "class="form-control my-3" name="dur"  value="<?php echo $row['duree_course'] ; ?>">
                    

                   
                        <input type="text" placeholder="prix de course" class="form-control my-3" name="prix" value="<?php echo $row['prix_course'] ; ?>">
                
                        <div class="my-3">
                       
                        <div class="col-12">
                   <input type="submit" name="update" value="UPDATE">
                        </div>
                </div>
                  
                </form>        
            
  </body>
  <?php 
      if(!empty($_POST['id']) && !empty($_POST['title']) && !empty($_POST['dur']) && !empty($_POST['prix']) ){    

$id=$_POST['id'];
$title=$_POST['title'];
$dur=$_POST['dur'];
$prix= $_POST['prix'];


$sql="UPDATE courses 
SET title_course = '$title', duree_course = '$dur',prix_course = '$prix' WHERE id ='" .$id . "'";		

if (mysqli_query($conn, $sql)) {
header("location:course.php");
} else {
echo "Error updating record: " . mysqli_error($conn);
}
      }
?>
 
</html>
<?php
 } 
  
?>

<?php mysqli_close($conn);?>