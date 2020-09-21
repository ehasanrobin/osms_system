<?php
define("TITLE","dashboard");
define("PAGE","dashboard");
include("../config.php");
session_start();
if(isset($_SESSION["admin"])){
   $a_email =   $_SESSION["adminemail"];
}else{
    header("location: http://localhost/newosms/admin/admin_login.php");
} 
include("includes/header.php");

$sql1="SELECT * FROM submit_request_tb";
$result1 = mysqli_query($connect,$sql1) or die("Query failed");
if(mysqli_num_rows($result1) > 0){
    $total_request = mysqli_num_rows($result1);
}else{
    $total_request = 0;
}
$sql2="SELECT * FROM assignwork_tb";
$result2 = mysqli_query($connect,$sql2) or die("Query failed");
if(mysqli_num_rows($result2) > 0){
    $total_work = mysqli_num_rows($result2);
}else{
    $total_request = 0;
}
$sql3="SELECT * FROM technician_tb";
$result3 = mysqli_query($connect,$sql3) or die("Query failed");
if(mysqli_num_rows($result3) > 0){
    $total_tech = mysqli_num_rows($result3);
}else{
    $total_tech = 0;
}




?>


<div class="container-fluid">
    <div class="row">
    <!-- start side bar  -->
        <?php include("sidebar.php");?>
        <!-- end side bar  -->
        <!-- start dashboard content  -->
        <div class="col-sm-9 ml-5">
            <div class="row text-center">
                <div class="col-sm-4 mt-5 py-5">
                    <div class="card text-white text-capitalize bg-danger mb-3">
                        <div class="card-header"> request recieved</div>
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $total_request;?></h4>
                            <a href="request.php" class="btn text-white">view</a>
                        </div>
                    </div>
                </div>
                <!-- end col  -->
                <div class="col-sm-4 mt-5 py-5">
                <div class="card text-white text-capitalize bg-success mb-3">
                        <div class="card-header"> assign work</div>
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $total_work ;?></h4>
                            <a href="work.php" class="btn text-white">view</a>
                        </div>
                    </div>
                </div>
                <!-- end col  -->
                <div class="col-sm-4 mt-5 py-5">
                <div class="card text-white text-capitalize bg-primary mb-3">
                        <div class="card-header">no. of technician</div>
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $total_tech ;?></h4>
                            <a href="technician.php" class="btn text-white">view</a>
                        </div>
                    </div>
                </div>
                <!-- end col  -->
            </div>
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-12">
                <div class="text-center ">
                <div class="bg-dark p-2 text-white">
                <h3>list of requesters</h3>
                </div>
            </div>
            <?php
            $sql = "SELECT * FROM requesterlogin_tb ";
            $result = mysqli_query($connect,$sql) or die("Query failed");
            if(mysqli_num_rows($result) > 0){
                

            ?>
            <table class="table text-center ">
                <thead class="font-weight-bold text-capitalize table ">
                    <tr>
                        <td>requester id</td>
                        <td>name </td>
                        <td> email</td>
                    </tr>
                
                </thead>
                <tbody>
                <?php 
                while($row = mysqli_fetch_array($result)){
                ?>
                <tr class="border-bottom">
                    <td class="font-weight-bold "><?php echo $row["r_login_id"];?></td>
                    <td><?php echo $row["r_name"];?></td>
                    <td><?php echo $row["r_email"];?> </td>
                </tr>
                <?php }?>
                </tbody>
                <?php
              
            }else{
                echo "<h1>no requesters</h1>";
            }
            ?>

            </table>
           
                
                </div>
              
              </div>
                
            </div>
        </div>
        <!-- end dashboard content  -->
    </div>
</div>
<?php
include("includes/footer.php");
?>

















