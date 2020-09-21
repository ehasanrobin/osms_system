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
if(isset($_REQUEST["techsub"])){
    $emp_name = $_REQUEST["emp_name"];
    $emp_city = $_REQUEST["emp_city"];
    $emp_mobile = $_REQUEST["emp_mbl"];
    $emp_mail = $_REQUEST["emp_email"];
    $sql="INSERT INTO technician_tb (emp_name, emp_city, emp_mobile, emp_mail) VALUES ('{$emp_name}','{$emp_city}','{$emp_mobile}','{$emp_mail}')";
    $result = mysqli_query($connect,$sql) or die("Query failed.");
    if($result == true){
        $msg = "<div class='alert alert-success' role='alert'>successfully assigned</div>";
    }
}

?>

<div class="container-fluid">
    <div class="row">
    <!-- start side bar  -->
        <?php include("sidebar.php");?>
        <!-- end side bar  -->
        <!-- start insert  content  -->
        <div class="col-sm-6 mt-5  jumbotron">
        <h3 class="text-center text-capitalize">assign technician</h3>

            <table class="table ">
                <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                <div class="form-group">
                    <label for="">name</label>
                    <input type="text" class="form-control" placeholder="name" name="emp_name">
                </div>
                <div class="form-group">
                    <label for="">city</label>
                    <input type="text" class="form-control" placeholder="city" name="emp_city">
                </div>
                <div class="form-group">
                    <label for="">mobile</label>
                    <input type="text" class="form-control" placeholder="mobile" name="emp_mbl">
                </div>
                <div class="form-group">
                    <label for="">email</label>
                    <input type="email" class="form-control" placeholder="email" name="emp_email">
                </div>
                <input type="submit" class="btn btn-danger" name="techsub">
                <?php if(isset($msg)){ echo "$msg";}  ?>
                
                </form>

            
            </table>
        </div>
        <!-- end insert content  -->
    </div>
</div>
<?php
include("includes/footer.php");
?>

















