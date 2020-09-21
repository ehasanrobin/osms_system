<?php
define("TITLE","change password");
define("PAGE","changepassword");
include("../config.php");
session_start();
if(isset($_SESSION["admin"])){
   $a_email =   $_SESSION["adminemail"];
}else{
    header("location: http://localhost/newosms/admin/admin_login.php");
} 
include("includes/header.php");
?>
<?php
$a_email =   $_SESSION["adminemail"];
 $sql = "SELECT a_email FROM adminlogin_tb WHERE a_email = '{$a_email}'"; 
 $result = mysqli_query($connect,$sql) or die("Query failed.");
 if($result == true){
     while($row = mysqli_fetch_array($result)){
         $a_email = $row["a_email"];
     }
 }
 if(isset($_REQUEST["newpwdsubmit"])){
     if($_REQUEST["newpwd"] == ""){
        $update_msg ='<div class="alert alert-warning mt-3" role="alert">passwords field is required</div>';
     }else{
         $newpwd = mysqli_real_escape_string($connect,md5(sha1($_REQUEST["newpwd"])));
      $sql1="UPDATE adminlogin_tb SET a_password ='{$newpwd}' WHERE a_email='{$a_email}'";
        $result1=mysqli_query($connect,$sql1) or die("Query failed");
        if($result1 == true){
            $update_msg ='<div class="alert alert-success mt-3" role="alert">password changed</div>';
        }
     }
 }

?>


<div class="container-fluid">
    <div class="row">
    <!-- start side bar  -->
        <?php include("sidebar.php");?>
        <!-- end side bar  -->
        <!-- start dashboard content  -->
        <div class="col-sm-5 mt-5">
        <form action="" method="post">
            <div class="form-group my-5">
                <label for="">email address</label>
                <input type="email" class="form-control" name="email" value="<?php echo $a_email;?>"readonly>
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
        <!-- end dashboard content  -->
    </div>
</div>
<?php
include("includes/footer.php");
?>

















