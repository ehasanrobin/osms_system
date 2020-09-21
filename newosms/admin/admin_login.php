<?php
include("../config.php");
session_start();
if(!isset($_SESSION["admin"])){

    if(isset($_REQUEST["adminlogin"])){

        $email =  mysqli_real_escape_string($connect,$_REQUEST["email"]);
        $password =  mysqli_real_escape_string($connect,$_REQUEST["password"]);
        // berify log in email and password
         $sql ="SELECT * FROM adminlogin_tb WHERE a_email = '{$email}' AND a_password = '{$password}' LIMIT 1";
        $result = mysqli_query($connect,$sql) or die("select Query failed.");
         if(mysqli_num_rows($result) == 1){
             while($row = mysqli_fetch_array($result)){
                session_start();
                $_SESSION["admin"] = $row["a_name"];
                $_SESSION["adminemail"] = $row["a_email"];
    
                header("location: http://localhost/newosms/admin/dashboard.php");
             }
            
         }else{
            $log_msg ='<div class="alert alert-danger mt-3" role="alert">your information was incorrect</div>';
         }
    
        
    
    }
}else{
    header("location: http://localhost/newosms/admin/dashboard.php");
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> admin login</title>
    <!-- bootsrap css link -->
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- font awesome link  -->
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <!-- google font  -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- custom css  -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class=" container mt-5 text-center font-weight-normal">
   <h2> <i class="fa fa-stethoscope" aria-hidden="true"></i><span>online service management system</span></h2>
   <p class="text-center "><span><i class="fa fa-user-secret text-danger" aria-hidden="true"></i></span> admin Area(Demo)</p>
    </div>
    <div class="container-fluid">
     <div class="row justify-content-center">
      <div class="col-sm-6 col-md-4">
      <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" class="shadow-lg p-4 mt-5">
       <div class="form-group">
        <span><i class="fa fa-user" aria-hidden="true"></i></span> <label for="" class="font-weight-bold">Email</label>
        <input type="email" placeholder="Email" class="form-control" name="email">
        <small>We'll never share your email with anyone else.</small>
       </div>
       <div class="form-group">
        <span><i class="fa fa-key" aria-hidden="true"></i></span> <label for="password" class="font-weight-bold">password</label>
        <input type="password" name="password" placeholder="password" class="form-control">
       </div>
       <input type="submit" value="log-in" name="adminlogin" class="btn btn-outline-danger btn-block font-weight-bold mt-3 shadow-sm">
    
    <?php if(isset($log_msg)){ echo $log_msg ; }?>
      
      </form>
      <div class="text-center">
      <a class="btn btn-primary text-center mt-4 font-weight-bold" href="../index.php"> Back To Home</a>
      </div>
      </div> <!-- col end  -->
     </div>
    
    </div>
 <!-- javascript links  -->
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/all.min.js"></script>

</body>
</html>