<?php
define("TITLE","work order");
define("PAGE","request");
include("../config.php");
session_start();
if(isset($_SESSION["admin"])){
   $a_email = $_SESSION["adminemail"];
}else{
    header("location: http://localhost/newosms/admin/admin_login.php");
} 
include("includes/header.php");
?>
 <?php
             if(isset($_REQUEST["viewbtn"])){
             $sql1="SELECT * FROM submit_request_tb WHERE request_id={$_REQUEST['r_id']}";
             $result1 = mysqli_query($connect,$sql1) or die("Query failed.");
             $row1 = mysqli_fetch_array($result1);
            }

            if(isset($_REQUEST["dltbtn"])){
                $sql2 ="DELETE FROM submit_request_tb WHERE request_id={$_REQUEST['r_id']} ";
                $result2 = mysqli_query($connect,$sql2) or die("Query failed.");
                if($result2 == true){
                    header("location: http://localhost/newosms/admin/request.php?dlt");
                    if(isset($_REQUEST["dlt"])){
                        
                    }
                    
                }
            }
             ?>

<div class="container-fluid">
    <div class="row">
    <!-- start side bar  -->
        <?php include("sidebar.php");?>
        <!-- end side bar  -->
        <!-- start request content  -->
        <div class="col-sm-9 mt-5">
        <div class="row mt-5">
            <div class="col-sm-4">
            <?php
            if(isset($_REQUEST["dlt"])){
                echo "<div class='alert alert-success col-sm-12' role='alert'>data deleted</div>";
            }
            
            ?>
            <?php
            $sql="SELECT * FROM submit_request_tb";
            $result= mysqli_query($connect,$sql) or die("Query failed");
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){

             
            
            ?>
                <div class="card mb-5">
                    <div class="card-header">
                         <p>request id : <?php echo $row["request_id"];?></p>
                    </div>
                    <div class="card-body text-capitalize ">
                        <h5 class="font-weight-bold">request info : <?php echo $row["request_info"];?></h5>
                        <p><?php echo $row["request_desc"];?></p>
                        <p>request date : <?php echo $row["request_date"];?></p>
                        <form action="" method="post">
                        <input type="hidden" name="r_id" value="<?php if(isset($row["request_id"])){echo $row["request_id"];}?>" readonly>
                        <input type="submit" value="close" name="dltbtn" class="btn btn-secondary text-white float-right ml-3"></input>
                        <input type="submit" value="view" name="viewbtn" class="btn-danger float-right btn"></input>
                        
                        </form>

                    </div>
                </div>
                <?php
                   }
                }else{
                    echo "<div class='alert alert-success col-sm-12' role='alert'>no request</div>";
                }
                ?>
            </div>
             <!-- col end  -->
            
             <?php
             if(isset($_REQUEST["assignbtn"])){
              if($_REQUEST['r_id'] =="" ||
                 $_REQUEST['r_info'] ==""||
                 $_REQUEST['r_name'] ==""||
                 $_REQUEST['r_desc'] ==""||
                 $_REQUEST['r_add1'] ==""||
                 $_REQUEST['r_add2'] ==""||
                 $_REQUEST['r_state'] ==""||
                 $_REQUEST['r_zip'] ==""||
                 $_REQUEST['r_email'] ==""||
                 $_REQUEST['r_mbl'] ==""||
                 $_REQUEST['assign_tech'] ==""||
                 $_REQUEST['assign_date'] ==""

                  ){
                    $msg ="<div class='alert alert-danger col-sm-12' role='alert'>insert all fields</div>";

              }else{
                $r_id = $_REQUEST['r_id'];
                $r_info = $_REQUEST['r_info'];
                $r_name = $_REQUEST['r_name'];
                $r_desc = $_REQUEST['r_desc'];
                $r_add1 = $_REQUEST['r_add1'];
                $r_add2 = $_REQUEST['r_add2'];
                $r_city = $_REQUEST['r_city'];
                $r_state = $_REQUEST['r_state'];
                $r_zip = $_REQUEST['r_zip'];
                $r_email = $_REQUEST['r_email'];
                $r_mbl = $_REQUEST['r_mbl'];
                $r_tech = $_REQUEST['assign_tech'];
                $r_date = $_REQUEST['assign_date'];


              $sql3 = "INSERT INTO `assignwork_tb`(`request_id`, `request_info`, `request_desc`,
               `request_name`, `requester_add1`, `requester_add2`, 
               `requester_city`, `requester_state`, `requester_zip`,
                `requester_email`, `request_mbl`, `assaign_tech`, `assaign_date`)
                 VALUES ('{$r_id}','{$r_info}','{$r_desc}','{$r_name}',
                 '{$r_add1}','{$r_add2}','{$r_city}','{$r_state}','{$r_zip}',
                 '{$r_email}','{$r_mbl}','{$r_tech}','{$r_date}')";
               
                 $result3=mysqli_query($connect,$sql3) or die("Query failed.");
                 if($result3 == true){
                     $msg ="<div class='alert alert-success col-sm-12' role='alert'>work assigned successfully</div>";

                 }
              }
             }
             
             ?>
            <div class="col-sm-8">
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="bg-light p-3 mb-5">
                        <div class="form-group text-capitalize text-center">
                            <h2>assigned work order request</h2>
                        </div>
                        <div class="form-group text-capitalize">
                            <label for="">request id</label>
                            <input type="text" name="r_id" class="form-control" value="<?php if(isset($row1['request_id'])){echo $row1['request_id'];} ?>" name="r_id" readonly>
                        </div>
                        <div class="form-group text-capitalize">
                            <label for="">request info</label>
                            <input type="text" placeholder="request info" class="form-control" value="<?php if(isset($row1['request_id'])){echo $row1['request_info'];} ?>" name="r_info">
                        </div>
                        <div class="form-group text-capitalize">
                            <label for="">description</label>
                            <input type="text" placeholder="description" class="form-control" value="<?php if(isset($row1['request_id'])){echo $row1['request_desc'];} ?>" name="r_desc">
                        </div>
                        <div class="form-group text-capitalize">
                            <label for="">name</label>
                            <input type="text" placeholder="name" class="form-control" value="<?php if(isset($row1['request_id'])){echo $row1['requester_name'];} ?>" name="r_name">
                        </div>
                        <div class="form-group text-capitalize">
                            <div class="row">
                                <div class="col-6">
                                <label for="">address 1</label>
                                    <input type="text" value="<?php if(isset($row1['request_id'])){echo $row1['requester_add1'];} ?>" placeholder="address 1" class="form-control" name="r_add1" >
                                </div>
                                <div class="col-6">
                                <label for=""> address 2</label>
                                    <input type="text" value="<?php if(isset($row1['request_id'])){echo $row1['requester_add2'];} ?>" placeholder="address 2" class="form-control" name="r_add2" >
                                </div>
                                
                            </div>
                        </div>
                        <div class="form-group text-capitalize">
                            <div class="row">
                                <div class="col-4">
                                <label for="">city</label>
                                    <input type="text" value="<?php if(isset($row1['request_id'])){echo $row1['requester_city'];} ?>" placeholder="city" class="form-control" name="r_city" >
                                </div>
                                <div class="col-4">
                                <label for=""> state</label>
                                    <input type="text" value="<?php if(isset($row1['request_id'])){echo $row1['requester_state'];} ?>" placeholder="state" class="form-control" name="r_state" >
                                </div>
                                <div class="col-4">
                                <label for=""> zip</label>
                                    <input type="text" value="<?php if(isset($row1['request_id'])){echo $row1['requester_zip'];} ?>" placeholder="zip" class="form-control" name="r_zip" >
                                </div>
                                
                            </div>
                        </div>
                        <div class="form-group text-capitalize">
                            <div class="row">
                                <div class="col-8">
                                <label for="">email</label>
                                    <input type="text" value="<?php if(isset($row1['request_id'])){echo $row1['requester_email'];} ?>" placeholder="email" class="form-control" name="r_email" >
                                </div>
                                <div class="col-4">
                                <label for="">mobile</label>
                                    <input type="text" value="<?php if(isset($row1['request_id'])){echo $row1['requester_mbl'];} ?>" placeholder="mobile" class="form-control" name="r_mbl" >
                                </div>
                                
                            </div>
                        </div>
                        <div class="form-group text-capitalize">
                            <div class="row">
                                <div class="col-8">
                                <label for="">technicial</label>
                                    <input type="text" placeholder="technician" class="form-control" name="assign_tech" >
                                </div>
                                <div class="col-4">
                                <label for="">date</label>
                                    <input type="date"  class="form-control" name="assign_date" >
                                </div>
                                
                            </div>
                        </div>
                        <div class="form-group text-capitalize">
                            <input type="reset" class="btn btn-secondary float-right ml-2" value="reset">
                            <input type="submit" class="btn btn-success float-right" name="assignbtn" value="assign">
                           
                        </div>

                       
                   

                    </form>
                    <?php
                      if(isset($msg)){echo $msg;}
                    
                    ?>
                </div>
        </div>
                
           
        </div>
        <!-- end request content  -->
    </div>
</div>
<?php
include("includes/footer.php");
?>

















