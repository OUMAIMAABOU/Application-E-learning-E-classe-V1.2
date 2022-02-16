
<?php  include_once 'server.php';
 session();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" >

    <link  href="css/dashboord.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnrow.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body class="row">
  <main>
  <div class="d-flex font-weight-400" id="dashboard">

    <div class="bg" id="sidebar-dashboard">
      <?php include 'sidebare.php'?>
   
      </div>

     <div id="page-content-dashboard">

    
      <div class=" py-0  ">
      <?php include 'navbar.php'?>
                
      </div>
        
      <div class=" py-2">
      <div >
             <div class="d-flex justify-content-between border-bottom ">   
              <span class="fs-4 fw-bold text-dark my-2 mx-2">Student List</span>
                <form class="d-flex my-2 px-3 ">
                  <i class="fas fa-sort mx-4 " style="font-size:30px;color:#00C1FE ;" ></i>
                  <button  type="button" class="form-control me-2 btn btn-primary text-light px-3" data-toggle="modal" data-target="#exampleModal">  ADD NEW STUDENT</button>
                  </form>
                            
                            </div>
                          


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter students</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form  method="POST" action="">

            
              
<div>  
     
      <input type="text" placeholder="Entrez votre nom" class="form-control my-3" name="name" id="name">
  

 
      <input type="email" placeholder="Entrez votre Email"class="form-control my-3" name="email" id="email">
  

 
      <input type="text" placeholder="Entrez votre Numbre" class="form-control my-3" name="phone" id="phone">
  

  
      <input type="text" placeholder="Entrez numbre2" class="form-control my-3" name="Number">
  
      <input type="date" placeholder="Entrez votre DATE" class="form-control my-3" name="date">
  
      <input type="file"  name="img" class="form-control-file">
     

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
               
<?PHP
   if(!empty($_POST['img'])&&!empty($_POST['name'])&&!empty($_POST['email'])&&!empty($_POST['phone'])&&!empty($_POST['Number'])&&!empty($_POST['date'])){
         $img=$_POST['img'];
         $nom=$_POST['name'];
         $email=$_POST['email'];
         $phone= $_POST['phone'];
         $nbr= $_POST['Number'];
         $date=$_POST['date'];

         $res ="INSERT INTO students(img , nom , email , phone1 , phone2 , dt) VALUES ('$img','$nom','$email','$phone','$nbr','$date') " ;
     
      addstudent($conn,$res);
 

  }

  else {
  

   }

?>
            
            <div class=" table-responsive-sm table-responsive-md py-3">
              <table class="table bg-white table-borderless table-hover  mx-3 ">
                <thead>
                  <tr class="bg_table text-table" style="background: #e5e5e57e;color: #ACACAC;">
              
                    <th></th>
                    <th >Name</th>
                    <th >Email</th>
                    <th >Phone</th>
                    <th class="text-nowrap">Enroll Number</th>
                    <th class="text-nowrap">Date of admission</th>
                    <th></th>
                   
      
                  </tr>
                </thead>
                <tbody class="font-weight-400">
                                   
                <?php  
         
                      $allstudents = getstudent($conn);
                      foreach ($allstudents as $row) {
                     ?>
                     
                    <tr>                  
                      <?php  $row['id']; ?>
                      <td><img src="img/<?php echo $row["img"]; ?>"  style="WIDTH: 10vh;"></td>
                      <td><?php echo $row["nom"]; ?></td>
                      <td><?php echo $row["email"]; ?></td>
                      <td><?php echo $row["phone1"]; ?></td>
                      <td><?php echo $row["phone2"]; ?></td>
                      <td><?php echo $row["dt"]; ?></td>
                     
                      <td><a href="delete.php?id=<?php  echo $row["id"]; ?>"><img src="img/ic-delete.svg"></a>
                      <a href="update.php?id=<?php echo $row["id"]; ?>"><img src=" img/ic-edit.svg"></a>
                      </tr>
                  
                  <?php }   ?> 
                      
                  <?php  $conn->close();   ?> 
                  

             
                
                </tbody>
              </table>
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