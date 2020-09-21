
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=osms, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>osms</title>
    <!-- bootstrap link/ -->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- font awesome link  -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- google font  -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- custom css  -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-danger fixed-top pl-5">  <!--  navbar start -->
 <a href="index.phpp" class="navbar-brand">osms</a>
 <span class="navbar-text">Customer's Happiness is our Aim</span>
<button class="navbar-toggler" data-toggle="collapse" data-target="#mymenu">
    <span class="navbar-toggler-icon"></span>
    
</button>
<div class="collapse navbar-collapse" id="mymenu">
    <ul class="navbar-nav pl-5  custom-nav">
        <li class="nav-item"><a href="index.php" class="nav-link ">home</a></li>
        <li class="nav-item"><a href="#servicee" class="nav-link">services</a></li>
        <li class="nav-item"><a href="#registration" class="nav-link">registration</a></li>
        <li class="nav-item"><a href="requester/requester_login.php" class="nav-link">login</a></li>
        <li class="nav-item"><a href="#contact" class="nav-link">contact us</a></li>
    </ul>
    </div>
</nav>
    <!-- navbar end  -->
    <!-- jumbotron header start  -->
    <header class="jumbotron jumbo-img">
    <div class="main-heading">
        <h1 class="text-danger text-uppercase font-weight-bold">welcome to osms</h1>
        <p class="font-italic">customer's happiness is our aim</p>
        <a href="requester/requester_login.php" class="btn btn-outline-success  mr-4"> log-in</a>
        <a href="#registration" class="btn btn-danger mr-4"> sign up</a>
    </div>
    </header>
    <!-- jumbotron header closeing  -->
    <div class="container">
        <div class="jumbotron">
            <h3 class="text-center">osms services</h3>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. O
                fficiis, quia recusandae quae nobis maxime id voluptas ac
                cusantium quasi expedita placeat. Aliquid maiores quidem la
                borum inventore repellendus quaerat, sunt, nisi facilis dolo
                remque illum tenetur unde sapiente laboriosam explicabo deser
                unt facere! Fugiat voluptatibus perferendis illum, sunt quam 
                aliquid ipsum harum cupiditate consequatur!</p>
        </div>
    </div>
    <!-- our services start  -->
    <section id="servicee">
        <div class="container">
            <div class="ourservices text-center">
            <h2 class="">our services</h2>
            <div class="row mt-4">
                <div class="col-4">
                <a href=""><i class="fas fa-tv fa-8x mb-4 text-success "></i></a>
                <h4 class="tect-upppercase">electronic appliances</h4>
                </div><!--  col-div  -->
                <div class="col-4">
                <a href=""><i class="fas fa-sliders-h fa-8x mb-4 text-primary"></i></a>
                <h4 class="tect-upppercase">Preventive Maintenance</h4>
                </div><!--  col-div  -->
                <div class="col-4">
                <a href=""><i class="fas fa-cogs fa-8x mb-4 text-primary "></i></a>
                <h4 class="tect-upppercase">Fault Repair</h4>
                </div><!--  col-div  -->

            </div>
            </div>
        </div>
    </section>
    <!-- our services end    -->
    <!-- registration form start -->
    <?php 
    include("user_registration.php");
    ?>
    <!-- registration form end  -->
    <!-- happy customer start  -->
    <section >
        <div class="jumbotron bg-danger">
            <div class="container">
                <h2 class="text-white text-center font-weight-bold">haapy customers</h2>
                <div class="row mt-5">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card shadow-lg mb-3">
                            <div class="card-body text-center">
                                <img src="images/avtar1.jpeg" class="img-fluid p-3 mb-2" style="border-radius:100px" alt="avt1">
                                <h4 class="card-title">rahul kumar</h4>
                                <p class="card-text"> Itaque illo explicabo voluptatum,
                                     saepe libero rerum, ad ducimus voluptas nesciunt 
                                     debitis numquam.</p>
                            </div>
                        </div>

                    </div>   <!-- col end  -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="card shadow-lg mb-3">
                            <div class="card-body text-center">
                                <img src="images/avtar2.jpeg" class="img-fluid p-3 mb-2" style="border-radius:100px" alt="avt1">
                                <h4 class="card-title">Sonam Sharma</h4>
                                <p class="card-text"> Itaque illo explicabo voluptatum,
                                     saepe libero rerum, ad ducimus voluptas nesciunt 
                                     debitis numquam.</p>
                            </div>
                        </div>

                    </div>   <!-- col end  -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="card shadow-lg mb-3">
                            <div class="card-body text-center">
                                <img src="images/avtar3.jpeg" class="img-fluid p-3 mb-2" style="border-radius:100px" alt="avt1">
                                <h4 class="card-title">Sumit Vyas</h4>
                                <p class="card-text"> Itaque illo explicabo voluptatum,
                                     saepe libero rerum, ad ducimus voluptas nesciunt 
                                     debitis numquam.</p>
                            </div>
                        </div>

                    </div>   <!-- col end  -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="card shadow-lg mb-3">
                            <div class="card-body text-center">
                                <img src="images/avtar4.jpeg" class="img-fluid p-3 mb-2" style="border-radius:100px" alt="avt1">
                                <h4 class="card-title">Jyoti Sinha</h4>
                                <p class="card-text"> Itaque illo explicabo voluptatum,
                                     saepe libero rerum, ad ducimus voluptas nesciunt 
                                     debitis numquam.</p>
                            </div>
                        </div>

                    </div>   <!-- col end  -->
                   
                </div>
            </div>
            
        </div>

    </section>

    <!-- happy customer end  -->

    <!-- contact us form start -->
<section id="contact">
    
<div class="container">
        <h2 class="text-center mb-4 text-uppercase">contact us</h2>
        <div class="row">
            <div class="col-md-8">
                <?php 
                include("contact_form.php");
                ?>
                </div>
                 <!-- col end  -->
            <div class="col-md-4 text-center">
                    <strong>Headquaters:</strong><br>
                    OSMS Pvt Ltd,<br>
                    Sec IV, Bokaro <br>
                    Jharkhand - 834005 <br>
                    Phone: +00000000 <br>
                    <a href="#" class="text-danger">www.osms.com</a> <br>
                    <br><br>
                    <strong >Delhi Branch:</strong><br>
                    OSMS Pvt Ltd,<br>
                    Ashok Nagar, Delhi<br>
                    Delhi - 804002 <br>
                    Phone: +00000000 <br>
                    <a href="#" class="text-danger">www.osms.com</a> <br>

                    </div> 
                    <!-- col end  -->
        </div>
    </div>
</section>
    <!-- contact us form end  -->
    <!-- footer section start  -->
    <footer class="container-fluid bg-dark text-white mt-5">
    <div class="container">
        <div class="row py-3">
            <div class="col-md-6">  <!-- first collum start  -->
                <span class="pr-2">Follow us:</span>
                <a href="" class="text-danger pr-2"><i class="fab fa-facebook    "></i></a>
                <a href="" class="text-danger pr-2"><i class="fab fa-twitter    "></i></a>
                <a href="" class="text-danger pr-2"><i class="fab fa-youtube    "></i></a>
                <a href="" class="text-danger pr-2"><i class="fab fa-linkedin    "></i></a>


            </div>  <!-- first collum end  -->
            <div class="col-md-6 ">
                <small class="text-right">Designed by Someone © 2018. </small>
                <small><a class="text-black text-right" href="admin/admin_login.php">admin log-in</a></small>
            </div>
        </div>
    </div>
    </footer>



    <!-- footer section end  -->

    <!-- javascript  links -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/all.min.js"></script>

</body>
</html>


