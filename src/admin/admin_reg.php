<?php

  session_start();  
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <title>Admin | Dashboard</title>

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <div id="wrapper">

            <div class="topbar">

                
                <div class="topbar-left">
                    <a href="index.html" class="logo"><span>Admin<span> Dashboard</span></span><i class="mdi mdi-layers"></i></a>
                </div>

               
                <div class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">


                        <ul class="nav navbar-nav list-inline navbar-left">
                            <li class="list-inline-item">
                                <button class="button-menu-mobile open-left">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>
                            <li class="list-inline-item">
                                <h4 class="page-title">Dashboard</h4>
                            </li>
                        </ul>

                        <nav class="navbar-custom">

                            <ul class="list-unstyled topbar-right-menu float-right mb-0">


                                <li class="hide-phone">
                                    <form class="app-search">
                                        <input type="text" placeholder="Search..."
                                                  class="form-control">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
           


            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">


                <div class="user-box">
                        <div class="user-img">
                            <img src="assets/images/users/avatar-1.png" alt="user-img" title="admin" class="rounded-circle img-thumbnail img-responsive">
                            <div class="user-status offline"><i class="mdi mdi-adjust"></i></div>
                        </div>
                        <h5><a href="#"><?php echo $_SESSION['username']; ?></a> </h5>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#" >
                                    <i class="mdi mdi-settings"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a href="logout.php" class="text-custom">
                                    <i class="mdi mdi-power"></i>
                                </a>
                            </li>
                        </ul>
                    </div>


                    <div id="sidebar-menu">
                        <ul>
                        	
                            <li>
                                <a href="index.php" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard </span> </a>
                            </li>

                            <li>
                                <a href="admin.php" class="waves-effect"><i class="mdi mdi-account-box"></i> <span> Manage Admins </span> </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-box"></i> <span>Manage Students </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="view.php">Update or Delete</a></li>
                                    <li><a href="search.php">Search By</a></li>            
                                </ul>
                            </li>

                        </ul>
                 
                    </div>

                    

                </div>

            </div>


            <div class="content-page">
         
                <div class="content">
                    <div class="container-fluid">


                        <div class="row">
                        <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-30 header-title">Admin Registration</h4>

                                    <form class="form-horizontal" role="form" method="post">
                                        <div class="form-group row">
                                            <label for="username" class="col-3 col-form-label">Username</label>
                                            <div class="col-9">
                                                <input type="text" class="form-control" name="username" placeholder="username" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="password" class="col-3 col-form-label">Password</label>
                                            <div class="col-9">
                                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                                            </div>
                                        </div>
                                      
                                        <div class="form-group mb-0 justify-content-center row">
                                        <input type="submit" class="btn btn-primary" name="register">
                                         </div>
                                    </form>
                                </div>
                            </div>
    
  
                
                        		</div>
                            </div>

                        </div>
                    
                    </div> 
                </div> 

                <footer class="footer text-right">
                    Copyright © Internship Management System
                </footer>

            </div>



        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

      
        <script src="assets/plugins/jquery-knob/jquery.knob.js"></script>

 
 

        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>


<?php

    include('connection.php');

    
if(isset($_POST['register'])){
	
    $name=$_POST['username'];
    $psw=$_POST['password'];

    // if ($name=='' || $psw=='' ) {
    //     echo "<script>alert('Please fill all field.....');<script>";
    // }	


    

        $qu="INSERT into login_user(a_user,a_password) VALUES ('$name','$psw')";
        $ru=mysqli_query($conn,$qu);

        if($ru)
        {
            echo "<script>window.open('admin.php','_self')</script>";
            echo "<script>window.alert('Admin added Successfully')</script>";
        }

    
}

?>