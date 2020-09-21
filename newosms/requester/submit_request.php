
<?php
define('PAGE', 'submit');
define('TITLE', 'submit request');

include("includes/header.php");
include("../config.php");
session_start();
if(isset($_SESSION["username"])){
   $email =  $_SESSION["email"];
}else{
    header("location: http://localhost/newosms/requester/requester_login.php");
} 

if(isset($_REQUEST["submit"])){
//  checking ofr empty fields 
if(($_REQUEST["rq_info"] == "") || 
($_REQUEST["rq_desc"] == "") || 
($_REQUEST["rq_name"] == "") ||  
($_REQUEST["rq_add1"] == "") || 
($_REQUEST["rq_add2"] == "") ||  
($_REQUEST["rq_city"] == "") ||    
($_REQUEST["rq_state"] == "") || 
($_REQUEST["rq_zip"] == "") || 
($_REQUEST["rq_email"] == "") || 
($_REQUEST["rq_mobile"] == "") || 
($_REQUEST["rq_date"] == "")){
    $msg='<div class="alert alert-danger mt-2 col-sm-12" role="alert">All fileds are required</div>';
}else{
    $r_info = $_REQUEST["rq_info"];
    $r_desc = $_REQUEST["rq_desc"];
    $r_name = $_REQUEST["rq_name"];
    $r_add1 = $_REQUEST["rq_add1"];
    $r_add2 = $_REQUEST["rq_add2"];
    $r_city = $_REQUEST["rq_city"];
    $r_state = $_REQUEST["rq_state"];
    $r_zip = $_REQUEST["rq_zip"];
    $r_email = $_REQUEST["rq_email"];
    $r_mobile = $_REQUEST["rq_mobile"];
    $r_date = $_REQUEST["rq_date"];

  $sql = "INSERT INTO `submit_request_tb` (`request_info`, `request_desc`, `requester_name`, `requester_add1`, `requester_add2`, `requester_city`, `requester_state`, `requester_zip`, `requester_email`, `requester_mbl`, `request_date`) VALUES ('{$r_info}', '{$r_desc}', '{$r_name}', '{$r_add1}', '{$r_add2}', '{$r_city}', '{$r_state}', '{$r_zip}', '{$r_email}', '{$r_mobile}', '{$r_date}')";
 
  $result = mysqli_query($connect,$sql) or die("Query failed.");
    if($result == true){
        session_start();
        $gen_id = mysqli_insert_id($connect);
      
        $msg='<div class="alert alert-success mt-2 col-sm-12" role="alert">Request submitted</div>';
        $_SESSION["myid"] =$gen_id;
        header("location: http://localhost/newosms/requester/submit_rqst_sccess.php");
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
       <!-- start submit area  -->
        <div class="col-sm-9 mt-5 py-5 ">
       <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <div class="form-group">
        <label for="" class="">Request info</label>
        <input type="text" placeholder="Request info" name="rq_info" class="form-control">
        </div>
        <!-- form group  end  -->
        <div class="form-group">
        <label for="" class="">Description</label>
        <input type="text" placeholder="Description" name="rq_desc" class="form-control">
        </div>
        <!-- form group  end  -->
        <div class="form-group">
        <label for="" class="">Name</label>
        <input type="text" placeholder="Name" name="rq_name" class="form-control">
        </div>
        <!-- form group  end  -->
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="">Address line 1</label>
                <input type="text" placeholder="address line 1" class="form-control" name="rq_add1">
            </div>
            <div class="form-group col-md-6">
                <label for="">Address line 2</label>
                <input type="text" placeholder="address line 1" class="form-control" name="rq_add2">
            </div>
        </div>
        <!-- form row group end  -->
           <!-- form group  end  -->
           <div class="form-row">
            <div class="form-group col-md-6">
                <label for="">city</label>
                <input type="text" placeholder="city" class="form-control" name="rq_city">
            </div>
            <div class="form-group col-md-3">
                <label for="">state</label>
                <input type="text" placeholder="state" class="form-control" name="rq_state">
            </div>
            <div class="form-group col-md-3">
                <label for="">zip</label>
                <input type="text" placeholder="state" name="rq_zip" class="form-control" onKeyPress="isInputNumber(event)">
            </div>
        </div>
        <!-- form row group end  -->
           <!-- form group  end  -->
           <div class="form-row">
            <div class="form-group col-md-6">
                <label for="">email</label>
                <input type="text" name="rq_email" placeholder="email" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="">mobile</label>
                <input type="text" name="rq_mobile" placeholder="mobile" class="form-control" onKeyPress="isInputNumber(event)">
            </div>
            <div class="form-group col-md-3">
                <label for="">date</label>
                <input type="date" name="rq_date" placeholder="date" class="form-control">
            </div>
        </div>
        <!-- form row group end  -->
        <button type="submit" class="btn btn-danger" name="submit">submit</button>
        <button type="reset" class="btn btn-secondary" name="reset">reset</button>
        <?php
        if(isset($msg)){echo $msg;}
        
        ?>

       </form>
        </div>





    <!-- end submit area  -->
    </div>
    <!-- end row  -->
    
</div>
<!-- container end  -->

 <!-- only for input number function -->
 <script>
 function isInputNumber(evt){
     var ch = String.fromCharCode(evt.which);
     if(!(/[0-9]/.test(ch))){
         evt.preventDefault();
     }
 }
 </script>

<?php 
     include("includes/footer.php")

?>