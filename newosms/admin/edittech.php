<?php
define("TITLE","technician page");
define("PAGE","technician");
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
    $chkid= $_REQUEST["emp_id"];
    $sql2="DELETE FROM technician_tb WHERE empid = '{$chkid}'";
    $result2= mysqli_query($connect,$sql2) or die("Query failed.");
    if($result2 == true){
       header("location: http://localhost/newosms/admin/technician.php");
    }
}




if(isset($_REQUEST["editbtn"])){
    $emp_id = $_REQUEST["emp_id"];

    $sql="SELECT * FROM technician_tb WHERE empid='{$emp_id}'";
    $result=mysqli_query($connect,$sql) or die("Query failed.");
    if($result == true){
        $row =mysqli_fetch_array($result);
    }
}
if(isset($_REQUEST["uptech"])){
    if( ($_REQUEST["empid"] == "") ||
        ($_REQUEST["emp_name"] == "") ||
        ($_REQUEST["emp_city"] == "") ||
        ($_REQUEST["emp_email"] == "") 
     ){
        $msg= "<div class='alert alert-danger mt-3' role='alert'>input all fields</div>";
    }else{
        $emp_id = $_REQUEST["empid"];
    $emp_name = $_REQUEST["emp_name"];
    $emp_city = $_REQUEST["emp_city"];
    $emp_mbl = $_REQUEST["emp_mbl"];
    $emp_mail = $_REQUEST["emp_email"];

    $sql1="UPDATE  technician_tb SET emp_name='{$emp_name}',emp_city='{$emp_city}',emp_mobile='{$emp_mbl}', emp_mail='$emp_mail'";
    $result1 =mysqli_query($connect,$sql1) or die("Query failed.");
    if($result1 == true){
        $msg= "<div class='alert alert-success mt-3' role='alert'> successfully updated</div>";
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
        <div class="col-sm-6 mt-5 jumbotron">
        <h3 class="text-center text-capitalize">update  technician information</h3>

<table class="table ">
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <div class="form-group">
    <input type="hidden" value="<?php if(isset($row['emp_name'])){ echo $row['empid'];} ?>" class="form-control" placeholder="name" name="empid">
        <label for="">name</label>
        <input type="text" value="<?php if(isset($row['emp_name'])){ echo $row['emp_name'];} ?>" class="form-control" placeholder="name" name="emp_name">
    </div>
    <div class="form-group">
        <label for="">city</label>
        <input type="text" value="<?php if(isset($row['emp_city'])){echo $row['emp_city'];}?>" class="form-control" placeholder="city" name="emp_city">
    </div>
    <div class="form-group">
        <label for="">mobile</label>
        <input type="text" value="<?php if(isset($row['emp_mobile'])){echo $row['emp_mobile'];} ?>" class="form-control" placeholder="mobile" name="emp_mbl">
    </div>
    <div class="form-group">
        <label for="">email</label>
        <input type="email" value="<?php if(isset($row['emp_mail'])){echo $row['emp_mail'];} ?>" class="form-control" placeholder="email" name="emp_email">
    </div>
    <input type="submit" class="btn btn-danger" name="uptech">
    <?php if(isset($msg)){ echo "$msg";}  ?>
    
    </form>


</table>
        </div>
        <!-- end dashboard content  -->
    </div>
</div>
<?php
include("includes/footer.php");
?>

















