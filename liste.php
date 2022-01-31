<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="css/dashboord.css" />
    <title>home</title>
</head>


<body>
   <main>
    <div class="d-flex" id="dashboard">
  
        <div class="bg" id="sidebar-dashboard">
        <?php include 'sidebare.php'?>
        </div>
      

       
        <div class="bg-white" id="page-content-dashboard">
            <div class="py-2">  
             <?php include 'navbar.php'?>
            </div>
            <div class="container-fluid px-4">
                <div class="row my-2 d-flex justify-content-center">
                    <div class="col-lg-3 col-md-5 mb-4 ">
                        <div class="p-3  shadow-sm d-flex justify-content-around align-items-center  " style="background: #F0F9FF;">
                            <div>
                                <i class="fas fa-graduation-cap fs-5  p-1"></i>

                                <p class="fs-5 mb-5 Secondary-text">Students</p>
                            </div>
                            <h3 class="fs-5 mt-5">243</h3>
                        </div>
                    </div>

                    <div class="col-lg-3  col-md-5  mb-4 ">
                        <div class="p-3  shadow-sm d-flex justify-content-around align-items-center" style="background: #FEF6FB;">
                            <div>
                                <i class="far fa-bookmark fs-5 p-1"></i>

                                <p class="fs-5 mb-5 Secondary-text">Course</p>
                            </div>
                            <h3 class="fs-5 mt-5">13</h3>
                        </div>
                    </div>

                    <div class=" col-lg-3  col-md-5  mb-4" >
                        <div class="p-3  shadow-sm d-flex justify-content-around align-items-center" style="background: #FEFBEC;">
                            <div>
                                <i class="fas fa-dollar-sign fs-5  p-1"></i>

                                <p class="fs-5 mb-5 Secondary-text">Payments</p>
                            </div>
                            <h3 class="fs-5 mt-5">DH556,000</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-5  mb-4">
                        <div class="p-3  shadow-sm d-flex justify-content-around align-items-center" style="background: linear-gradient(110.42deg, #00C1FE 18.27%, #FAFFC1 91.84%)">
                            <div>
                                <i class="far fa-user fs-5  p-1"></i>

                                <p class="fs-5 mb-5 ">Users</p>
                            </div>
                            <h3 class="fs-5 mt-5">3</h3>
                        </div>
                    </div>
                </div>


            </div>
      
        </div>
     
    </div>

 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
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