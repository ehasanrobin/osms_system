<?php  
 define('TITLE', 'success');
 include("includes/header.php");
 include("../config.php");
 session_start();
if(isset($_SESSION["username"])){
    $email =  $_SESSION["email"];
 }else{
     header("location: http://localhost/newosms/requester/requester_login.php");
 } 

 $sql ="SELECT * FROM submit_request_tb WHERE request_id ={$_SESSION["myid"]}";
 $result = mysqli_query($connect,$sql);
 if(mysqli_num_rows($result) == 1){
    while($row = mysqli_fetch_array($result)){
        
   

?>
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
        <div class="col-sm-6 mt-5 py-5">
        <table class="table">
        <thead class="">
            <tr>
                <td><b>request id</b></td>
                <td><?php echo $row["request_id"];?></td>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td><b>name</b></td>
            <td><?php echo $row["requester_name"];?></td>
        </tr>
        <tr>
            <td><b>email id</b></td>
            <td><?php echo $row["requester_email"];?></td>
        </tr>
        <tr>
            <td><b>request info</b></td>
            <td><?php echo $row["request_info"];?></td>
        </tr>
        <tr>
            <td> <b>Request Description</b></td>
            <td><?php echo $row["request_desc"];?></td>
        </tr>
        <tr>
            <td><form action="" class="d-print-none"><input type="submit" value="print" class="btn btn-danger" onClick="window.print()"></form></td>
        </tr>
        </tbody>
        </table>
        <?php  }
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