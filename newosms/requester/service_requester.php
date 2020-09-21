


<?php
define('PAGE', 'service');
define('TITLE', 'service request');
include("includes/header.php");
include("../config.php");


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
       <!-- start service area  -->
        <div class="col-sm-6 mt-5">
        
        <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" class="form-inline d-print-none">
            <div class="form-group mt-5">
            <label for="">Enter request id:</label>
            <input type="text" name="chkid" class="form-control ml-2" id="chkid">
            </div>
            <button class="btn btn-danger mt-5 ml-2" name="srcbtn" type="submit">search</button>
        </form>
        <?php 
        if(isset($_REQUEST["srcbtn"])){
            $src = $_REQUEST["chkid"];

            $sql1= "SELECT * FROM submit_request_tb WHERE request_id = '{$src}'";
            $result1=mysqli_query($connect,$sql1) or die("Query failed");
            if(mysqli_num_rows($result1) > 0){
                $sql="SELECT * FROM assignwork_tb WHERE request_id = '{$src}'";
                $result= mysqli_query($connect,$sql) or die("Queary failed");
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
    
                
            ?>
            <h3 class="text-capitalize text-center m-3">assinged work details</h3>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td>Request id</td>
                        <td><?php echo $row["request_id"];?></td>
                    </tr>
                    <tr>
                        <td>Request info</td>
                        <td><?php echo $row["request_info"];?></td>
                    </tr>
                    <tr>
                        <td>Request description</td>
                        <td><?php echo $row["request_desc"];?></td>
                    </tr>
                    <tr>
                        <td>name</td>
                        <td><?php echo $row["request_name"];?></td>
                    </tr>
                    <tr>
                        <td>address 1</td>
                        <td><?php echo $row["requester_add1"];?></td>
                    </tr>
                    <tr>
                        <td>address 2</td>
                        <td><?php echo $row["requester_add2"];?></td>
                    </tr>
                    <tr>
                        <td>city</td>
                        <td><?php echo $row["requester_city"];?></td>
                    </tr>
                    <tr>
                        <td>state</td>
                        <td><?php echo $row["requester_state"];?></td>
                    </tr>
                    <tr>
                        <td>zip</td>
                        <td><?php echo $row["requester_zip"];?></td>
                    </tr>
                    <tr>
                        <td>email</td>
                        <td><?php echo $row["requester_email"];?></td>
                    </tr>
                    <tr>
                        <td>mobile</td>
                        <td><?php echo $row["request_mbl"];?></td>
                    </tr>
                    <tr>
                        <td> assign date</td>
                        <td><?php echo $row["assaign_date"];?></td>
                    </tr>
                    <tr>
                        <td>technician name</td>
                        <td><?php echo $row["assaign_tech"];?></td>
                    </tr>
                    <tr>
                        <td>customer's</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>technician's sign</td>
                        <td></td>
                    </tr>
                </tbody>
            
            </table>
            <div class="text-center">
                <form action="" method="post" class="d-print-none">
                    <input type="submit" class=" mr-2 btn btn-danger" onClick="window.print()" value="print">
                    <input type="submit" value="close" class="btn btn-secondary">
                </form>
            </div>

            <?php
          
        
        }
    }else{
        echo "<div class='alert alert-warning mt-3 col-sm-12' role='alert'>your request is still pending</div>";
    }
            }else{
                echo "<div class='alert alert-danger mt-3 col-sm-12' role='alert'>incorrect request id</div>";
            }
            

} 

        
        ?>
        </div>
       
    <!-- end second collum  -->




    <!-- end service area  -->
    </div>
    <!-- end row  -->
    
</div>
<!-- container end  -->



<?php 
include("includes/footer.php");

?>