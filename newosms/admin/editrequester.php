<?php
define("TITLE","view requester");
define("PAGE","requester");
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

if(isset($_REQUEST["dltbtn"])){
    $chkid= $_REQUEST["r_id"];
    $sql2="DELETE FROM requesterlogin_tb WHERE r_login_id = '{$chkid}'";
    $result2= mysqli_query($connect,$sql2) or die("Query failed.");
    if($result2 == true){
       header("location: http://localhost/newosms/admin/requester.php");
    }
}


if(isset($_REQUEST["updatebtn"])){
   if(($_REQUEST["old_id"] == "") ||
      ($_REQUEST["new_name"] == "") ||
      ($_REQUEST["new_email"] == "") 
   
   ){
    $msg= "<div class='alert alert-danger mt-3' role='alert' >input all fields</div>";
   }else{
    $old_id = $_REQUEST["old_id"];
    $newnm = $_REQUEST["new_name"];
    $newemail = $_REQUEST["new_email"];

    $sql1 = "UPDATE requesterlogin_tb SET r_name = '{$newnm}', r_email = '{$newemail}' WHERE r_login_id ='{$old_id}'";
    $result1 = mysqli_query($connect,$sql1) or die("Query failed.");
    if($result1 == true){
        $msg= "<div class='alert alert-success mt-3' role='alert' > updated successfully</div>";
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
        <div class="col-sm-5 mt-5 jumbotron">
        <?php
        if(isset($_REQUEST["editbtn"])){
            $chkid= $_REQUEST["r_id"];
            $sql= " SELECT * FROM requesterlogin_tb WHERE r_login_id = '{$chkid}'";
            $result = mysqli_query($connect,$sql) or die("Query failed.");
            if($result == true){
             $row = mysqli_fetch_array($result);
            }
        }
            
       
        ?>
      



            <h3 class="text-center"> update requester details</h3>
            <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
                <div class="form-group">
                <label for="">request id</label>
                <input type="text" name="old_id" class="form-control" value="<?php if(isset($row['r_login_id'])){echo $row['r_login_id'];} ?>" readonly >
                </div>
                <div class="form-group">
                    <label for="">name</label>
                    <input type="text" class="form-control" value="<?php if(isset($row['r_name'])){echo $row['r_name'];} ?>" name="new_name">
                </div>
                <div class="form-group">
                    <label for="">email</label>
                    <input type="email" name="new_email" class="form-control" value="<?php if(isset($row['r_email'])){echo $row['r_email'];} ?>">
                </div>
                <button type="submit" name="updatebtn" class="btn btn-danger">update</button>
                <a href="requester.php" class="btn btn-secondary">close</a>


            
            
            
            </form>
            <?php if(isset($msg)){echo $msg;}?>
            <?php
          
            
            ?>
        
        </div>
        <!-- end dashboard content  -->
    </div>
</div>
<?php
include("includes/footer.php");
?>

















