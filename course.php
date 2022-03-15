<?php   include_once 'server.php'; session(); ?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>course</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <link  href="css/dashboord.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>

    <body class="row">
     
    <main>
        <div class="d-flex" id="dashboard">
        <div class="bg" id="sidebar-dashboard">
        <?php include 'sidebare.php'?>
        </div>

      

        <div id="page-content-dashboard">
          
          <div class=" px-0 ">
            <?php include 'navbar.php'?>
          </div>

            <div class=" px-2 ">
                    <div class="d-flex justify-content-between border-bottom">
                      
                      <span class="fs-6 fw-bold text-dark my-2 ">Courses</span>
                
                            
                                <form class="d-flex my-2 ">
                                  <i class="fas fa-sort mx-4 " style="font-size:30px;color:#00C1FE ;" ></i>
                                    <button class="form-control me-2 btn btn-primary text-light " type="button" data-toggle="modal" data-target="#exampleModal">
                                      ADD NEW COURSES</button>
                                  
                                  </form>
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ajouter Course</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                      <form  method="POST" action ="">

                            
                              
                <div >
                    
                      <input type="text" placeholder="title de course" class="form-control my-3" name="title">
                  

                
                      <input type="text" placeholder="Durée de course "class="form-control my-3" name="dur">
                  

                
                      <input type="text" placeholder="prix de course" class="form-control my-3" name="prix">

</div> 
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary"  name="add" value="add" >
                      </div>
                      </form>  
                      </div>
  </div>
</div>
</div>   
<?php 

if(!empty($_POST['title'])&&!empty($_POST['dur'])&&!empty($_POST['prix'])){

  $title=$_POST['title'];
  $dur=$_POST['dur'];
  $prix= $_POST['prix'];


  $sql ="INSERT INTO courses( title_course , duree_course , prix_course ) VALUES ('$title','$dur','$prix') " ;
  addstudent($conn,$sql);


}
?>     

              <div class=" table-responsive-sm table-responsive-md">
                <table class="table table-striped  table-borderless table-hover bg-white mx-3 ">
                    <thead>
                        <tr class="bg_table text-table">
              
                          <th>title</th>
                          <th class="text-nowrap">Durée</th>
                          <th class="text-nowrap">Prix</th>
                          <th class="text-nowrap"></th>
                       
                        
                        
          
                        
                        </tr>
                      </thead>
                      <tbody>
                    
          <?php                         
                  $allcours = getcours($conn);
                  foreach ($allcours as $row) {
                       $row['id']; 
              ?>  
                 <tr>
                                <td><?php echo $row["title_course"]; ?></td>
                <td><?php echo $row["duree_course"]; ?></td>   
                <td><?php echo $row["prix_course"]; ?>DH</td>
              
                <td><a href="courdelete.php?id=<?php echo $row['id']; ?>">  <input type="image"  src="img/ic-delete.svg" 
                       onclick="if(window.confirm('Voulez-vous vraiment supprimer ?')){return true;}else{return false;}"></a></td>
                <td> <a href="formup.php?id=<?php  echo $row["id"]; ?>"><img src=" img/ic-edit.svg"></a></td>
                
                </tr>              
<?php } ?>  

<?php mysqli_close($conn);
?> 

                      


                    </tbody>
                </table>
            </div>
    </div>  
    </div>    
    </div>  
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
   </main> 
</body>
</html>