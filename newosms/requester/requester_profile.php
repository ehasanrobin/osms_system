<?php
define('PAGE', 'profile');
define('TITLE', 'PROFILE');
include("../config.php");
session_start();
if(isset($_SESSION["username"])){
   $email =  $_SESSION["email"];
}else{
    header("location: http://localhost/newosms/requester/requester_login.php");
} 
//fetch username and email where session matches email
  $sql = "SELECT r_email,r_name FROM requesterlogin_tb WHERE r_email = '{$email}'"; 
 $result = mysqli_query($connect,$sql) or die("Query failed.");
 if($result == true){
     while($row = mysqli_fetch_array($result)){
         $r_name = $row["r_name"];
     }
 }

 if(isset($_REQUEST["nameupdate"])){
    if($_REQUEST["name"] == ""){
        $update_msg ='<div class="alert alert-warning mt-3" role="alert">all fields are required</div>';
    
    }else{
        $nw_name = $_REQUEST["name"];
 $sql1 = "UPDATE requesterlogin_tb SET r_name ='{$nw_name}' WHERE r_email = '{$email}'";
    $result1 = mysqli_query($connect,$sql1) or die("Query failed");
    if($result1 == true){

        $update_msg ='<div class="alert alert-success mt-3" role="alert">your name updated successfullly</div>';
    }
    }

    

 }


?>


<?php include("includes/header.php"); ?>
<body>
<!-- top navbar start -->
<div class="container-fluid">
    <nav class="navbar navbar-dark fixed-top bg-danger flex-md-nowrap  shadow-sm">
        <a href="requester_profile.php" class="navbar-brand col-sm-3 col-md-2 mr-2">osms</a>
    </nav>
</div>
<!-- top navbar end-->
 <!-- container start  -->
<div class="container-fluid">
    <div class="row">
  <?php 
  include("sidebar.php");
  ?>
       <!-- start profile area  -->
        <div class="col-sm-6 mt-5">
        <form action="" method="post" class="mt-5 mx-5">
            <div class="form-group">
                    <label for="inputemail">email</label>
                    <input type="disable" name="email" readonly class="form-control" id="email" value="<?php echo $_SESSION["email"];?>">
            </div>
            <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="<?php echo $r_name ;?>">
            </div>
            <button type="submit" class="btn btn-danger" name="nameupdate">update</button>
            <?php if(isset($update_msg)){ echo $update_msg ;}?>
        </form>
        </div>





    <!-- end profile area  -->
    </div>
    <!-- end row  -->
    
</div>
<!-- container end  -->



<?php 
include("includes/footer.php");

?>