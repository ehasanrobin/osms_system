<?php
define("TITLE","work report");
define("PAGE","workreport");
include("../config.php");
session_start();
if(isset($_SESSION["admin"])){
   $a_email =   $_SESSION["adminemail"];
}else{
    header("location: http://localhost/newosms/admin/admin_login.php");
} 
include("includes/header.php");
?>


<div class="container-fluid">
    <div class="row">
    <!-- start side bar  -->
        <?php include("sidebar.php");?>
        <!-- end side bar  -->
        <!-- start work content  -->
        <div class="col-sm-9 mt-5 text-center py-5">
        <form action="" method="post" class="d-print-none">
            <div class="form-row">
                <div class="form-group">
                    <input type="date" name="start_date" class="form-control">
                </div>
                <span>to</span>
                <div class="form-group">
                    <input type="date" name="end_date" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary ml-3" name="searchbtn">
                </div>
            </div>
        </form>
        <?php

if(isset($_REQUEST["searchbtn"])){
    $start_date = $_REQUEST["start_date"];
    $end_date = $_REQUEST["end_date"];
    $sql="SELECT * FROM assignwork_tb WHERE assaign_date BETWEEN '{$start_date}' AND '{$end_date}'";
    $result = mysqli_query($connect,$sql) or die("Query failed.");
    if(mysqli_num_rows($result) > 0){
       

?>
        <table class="table table-bordered">
         <thead>
           <tr>
               <th>request id</th>
               <th>request info</th>
               <th>name </th>
               <th>city </th>
               <th>mobile</th>
               <th>technician </th>
               <th>assigned date </th>
           </tr>
         </thead>
         <tbody>
         <?php  while($row = mysqli_fetch_array($result)){?>
            <tr>
                <td><?php echo $row["request_id"] ;?></td>
                <td><?php echo $row["request_info"] ;?></td>
                <td><?php echo $row["request_name"] ;?></td>
                <td><?php echo $row["requester_city"] ;?></td>
                <td><?php echo $row["request_mbl"] ;?></td>
                <td><?php echo $row["assaign_tech"] ;?></td>
                <td><?php echo $row["assaign_date"] ;?></td
                
            </tr>
            <?php  }?>
        
         </tbody>
       
        </table>
        <button class="btn btn-primary d-print-none" onClick="window.print()"> print</button>
         <a href="sellreport.php " class="btn btn-secondary d-print-none">close</a>
        <?php
             
            }else{
                echo "<div class='alert alert-warning' role-'alert'>no data found</div>";
            }
        }
        
        ?>
        </div>
        <!-- end work  content  -->
    </div>
</div>
<?php
include("includes/footer.php");
?>















