

<?php
define('PAGE', 'changepwd');
define('TITLE', 'change password');
include("includes/header.php");
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
         $r_email = $row["r_email"];
     }
 }
 if(isset($_REQUEST["newpwdsubmit"])){
     if($_REQUEST["newpwd"] == ""){
        $update_msg ='<div class="alert alert-warning mt-3" role="alert">passwords field is required</div>';
     }else{
         $newpwd = mysqli_real_escape_string($connect,md5(sha1($_REQUEST["newpwd"])));
      $sql1="UPDATE requesterlogin_tb SET r_password ='{$newpwd}' WHERE r_email='{$r_email}'";
        $result1=mysqli_query($connect,$sql1) or die("Query failed");
        if($result1 == true){
            $update_msg ='<div class="alert alert-success mt-3" role="alert">password changed</div>';
        }
     }
 }


?>
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
        <div class="col-sm-5 mt-5 text-uppercase">
        <form action="" method="post">
            <div class="form-group my-5">
                <label for="">email address</label>
                <input type="email" class="form-control" name="email" value="<?php echo $email;?>"readonly>
            </div>
            <div class="form-group">
                <label for="">new password</label>
                <input type="password" class="form-control" name="newpwd" placeholder="new password">
            </div>
            <input type="submit" class="btn btn-danger" value="update" name="newpwdsubmit">
            

        </form>
        <?php if(isset($update_msg)){
                echo $update_msg;
            }
            
            
            ?>
        
        </div>





    <!-- end profile area  -->
    </div>
    <!-- end row  -->
    
</div>
<!-- container end  -->



<?php 
include("includes/footer.php");

?>