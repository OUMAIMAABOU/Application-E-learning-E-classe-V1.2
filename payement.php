
<?php include_once 'server.php';?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pay</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <link  href="css/dashboord.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />



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
                      
                      <span class="fs-6 fw-bold text-dark my-2 ">Payment Details</span>
                
                            
                                <form class="d-flex my-2 ">
                                  <i class="fas fa-sort mx-4 " style="font-size:30px;color:#00C1FE ;" ></i>
                                    <button type="button" class="form-control me-2 btn btn-primary text-light " data-toggle="modal" data-target="#exampleModal">ADD NEW Payment</button>
                                  
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

      <form  method="POST" action="">

            
              
     
      <input type="text" placeholder="Entrez votre nom" class="form-control my-3" name="name" >
  

 
      <input type="text" placeholder="payment schedule"class="form-control my-3" name="payment_schedule">
  

 
      <input type="text" placeholder="Bill Number" class="form-control my-3" name="b_Number">
  

  
      <input type="text" placeholder="Amount paid" class="form-control my-3" name="Amount_paid">

  
      <input type="text" placeholder="Balance amount" class="form-control my-3" name="Balance_amount">
      <input type="date" placeholder="Balance amount" class="form-control my-3" name="dat">
  
      <div class="my-3">
          <input type="submit" name="save" value="save"></div>
     
 

      </form>  
    </div>
  </div>
</div>
                </div>

                <?php 
    if(!empty($_POST['name']) && !empty($_POST['payment_schedule']) && !empty($_POST['b_Number']) && !empty($_POST['Amount_paid']) && !empty($_POST['Balance_amount']) && !empty($_POST['dat'])){    
      $nom=$_POST['name'];
      $payment=$_POST['payment_schedule'];
      $Number= $_POST['b_Number'];
      $Amount= $_POST['Amount_paid'];
      $Balance=$_POST['Balance_amount'];
      $date=$_POST['dat'];

      $sql ="INSERT INTO payment_details( nom , payment_schedule , b_Number , Amount_paid , Balance_amount,dat) VALUES ('$nom','$payment','$Number','$Amount','$Balance','$date') " ;
    
 if (mysqli_query($conn, $sql)) {

} else {
    echo "Error: " . $sql . ":-" . mysqli_error($conn);
 }
}
 ?> 
              <div class=" table-responsive-sm table-responsive-md">
                <table class="table table-striped  table-borderless table-hover bg-white mx-3 ">
                    <thead>
                        <tr class="bg_table text-table">
              
                          <th>Name</th>
                          <th class="text-nowrap">Payment schedule</th>
                          <th class="text-nowrap">Bill Number</th>
                          <th class="text-nowrap"> Amount paid</th>
                          <th class="text-nowrap">Balance amount</th>
                          <th>date</th>
                          <th></th>
          
                        
                        </tr>
                      </thead>
                      <tbody>
                    
          <?php  

                   
                                      
                    $sql =mysqli_query($conn," select * from payment_details ") ;




                    while($row = mysqli_fetch_array($sql)){
                   
              ?>  
                 <tr>
                 <?php  $row['id']; ?>
                <td><?php echo $row["nom"]; ?></td>
                <td><?php echo $row["payment_schedule"]; ?></td>
                <td><?php echo $row["b_Number"]; ?></td>
                <td><?php echo $row["Amount_paid"]; ?></td>
                <td><?php echo $row["Balance_amount"]; ?></td>
                <td><?php echo $row["dat"]; ?></td>
                <td></td>
              
                </tr>
              
<?php } ?> 



    
                      


                    </tbody>
                </table>
            </div>
    </div>  
    </div>    
    </div>  
    <?php   mysqli_close($conn); ?>  
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