
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" >

    <link  href="css/dashboord.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />



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
                  <button class="form-control me-2 bg-info text-light px-3" style="font-size: small;" >  <a href="forma.php">ADD NEW STUDENT </a></button>
                  <div class="modal" tabindex="-1" role="dialog">
  
                </form>
                            
              </div>
            </div>
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
                    <th></th>
      
                  </tr>
                </thead>
                <tbody class="font-weight-400">
                <?php  
    

                      $img= '<img src="img/86bc08c6e40f8d41ee54bd655ffbc696.jpg" alt="p" style="WIDTH: 100px;">';
                      $icon1= '<i class="fas fa-pen  " style="font-size:28px;color:#00C1FE ;"></i></a>';

                      $icon2= '<i class="fas fa-trash "  style="font-size:28px;color:#00C1FE ;"></a>';

                      $data=file_get_contents('data.json');
                      $js=json_decode($data,true);
                      $js=array_reverse($js);  

                      foreach($js as $js){
                        echo'<tr>
                   
                        <td>'.$img.'</td>
                        <td>'.$js['Name'].'</td>
                        <td>'.$js['Email'].'</td>
                        <td>'.$js['phone'].'</td>
                        <td>'. $js['EnrollNumber'].'</td>
                        <td>'.$js['Date'].'</td>
                        <td><a href="delete.php?id='.$js['id'].'">'.$icon1.'</a>
                        <td><a href="update.php?id='.$js['id'].'">'.$icon2.'</a>
                       
                        
                       
                        
                    </td> </tr>';
                      } 
                  



                ?>   
                </tbody>
              </table>
            </div> 
      </div>      
     </div>   
    
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