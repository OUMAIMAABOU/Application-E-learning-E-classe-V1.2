
<div class="m-2 dark-text fs-4 fw-bold border-start border-5 border-info px-2">
          <h1> E-classe </h1>
        </div>
        <div class="list-group ">
            <img src="img/profile.jpg" alt="profile picture"
                class=" profile img-fluid rounded-circle mx-auto d-block my-2 p-1" style="width:80% ; ">
            <div class="text-center ">
                <h2> Admin name </h2>
                <span class=" text-info fs-4">Admin</span>
            </div>

            
            <a href="liste.php" class="list-group-item mx-5 border-0 mt-3  <?php if( basename($_SERVER['REQUEST_URI'])=="liste.php"){ echo "bg-info";}else{echo"bg-transparent";};?>" >
                <i class="fas fa-home"></i> Home</a>
            <a href="#" class="list-group-item mx-5 border-0 bg-transparent  ">
                <i class="far fa-bookmark"></i> Course </a>
            <a href="student.php" class="list-group-item mx-5 border-0  rounded-3 <?php if( basename($_SERVER['REQUEST_URI'])=="student.php"){ echo "bg-info";}else{echo"bg-transparent";};?>  ">
                <i class="fas fa-graduation-cap"></i> Students</a>
            <a href="payement.php" class="list-group-item mx-5 border-0  <?php if( basename($_SERVER['REQUEST_URI'])=="payement.php"){ echo "bg-info";}else{echo"bg-transparent";};?> ">
                <i class="fas fa-dollar-sign "></i> Payment </a>
            <a href="#" class="list-group-item mx-5 border-0 bg-transparent ">
                <i class="far fa-file-alt"></i> Report </a>
            <a href="#" class="list-group-item mx-5 border-0 bg-transparent ">
                <i class="fas fa-sliders-h"></i> Settings</a>
            <a href="index.php" class="list-group-item mx-5 border-0 bg-transparent  mt-5 mb-2 ">
                Logout <i class="fas fa-sign-out-alt"></i> </a>
        </div>
   
   
