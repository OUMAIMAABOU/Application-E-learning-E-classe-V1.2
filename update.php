<?php include_once 'server.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <?php

    $query = mysqli_query ($conn,"SELECT * FROM students WHERE  id ='" . $_GET["id"] . "'");

    while ($row = mysqli_fetch_array ($query)) 
    {
        
    ?>

          
         
            <form method="POST" action="">
              <div class="px-5 ">
                <input type="hidden" class="form-control " name="id" value="<?php echo $row['id'] ; ?>" >
                
                
                    <input type="text"  class="form-control mt-5" name="name" value="<?php echo $row['nom'] ; ?>" >
            
                
                    <input type="email" class="form-control mt-3" name="email"  value="<?php echo $row['email'] ; ?>">
            


                    <input type="text" class="form-control mt-3" name="phone"  value="<?php echo $row['phone1'] ; ?>">
                

                    <input type="text" class="form-control mt-3" name="Number" value="<?php echo $row['phone2'] ; ?>">
            

                    <input type="date" class="form-control mt-3 " name="date" id="date" value="<?php echo $row['dt'] ; ?>">
                    
                    <input type="file"  name="img" class=" form-control me-2 mt-3 btn btn-light text-black"  value="<?php  ?>">

                    <input type="submit" name="update" value="UPDATE" class="form-control mt-3 btn btn-primary text-light">
                      
                 
                </div>  
            </form> 
         
<?php
   if(!empty($_POST['img'])&&!empty($_POST['name'])&&!empty($_POST['email'])&&!empty($_POST['phone'])&&!empty($_POST['Number'])&&!empty($_POST['date'])){

     $id=$_POST['id'];
     $img=$_POST['img'];
     $nom=$_POST['name'];
     $email=$_POST['email'];
     $phone= $_POST['phone'];
     $nbr= $_POST['Number'];
     $date=$_POST['date'];
    $sql="UPDATE students 
    SET img = '$img', nom = '$nom',email = '$email',phone1 = '$phone',phone2 = '$nbr',dt = '$date' WHERE id ='" .$id . "'";		
    
    if (mysqli_query($conn, $sql)) {
    header("location:student.php");
    } else {
     echo "Error updating record: " . mysqli_error($conn);
    }
}
   
?>
<?php
    }
   ?>

<?php
    mysqli_close($conn);
?>

</body>
</html>


 
