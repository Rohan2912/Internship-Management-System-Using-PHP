<?php
  session_start();  
?>
<?php
include 'connection.php'; 
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
                        <div class="clearfix"></div>
                    </div>

                    <div class="clearfix"></div>

                </div>

            </div>


            <div class="content-page">
         
                <div class="content">
                    <div class="container-fluid">


                        <div class="row">

                            <div class="col-xl-3 col-md-6">
                        		<div class="card-box">
                                

                        			<h2 class="header mt-0 m-b-30">Total Interns</h2>

                                        <div class="widget-detail-1">
                                            <?php
                                            $con=mysqli_connect('localhost','root','','student_demo');
                                            $que='SELECT * FROM u_reg';
                                            $run=mysqli_query($con,$que);
                                            $number=mysqli_num_rows($run);
                                            
                                             ?>
                                            <h3 class="p-t-10 mb-0"><?php echo $number; ?></h3>
                                            <p class="text-muted m-b-10">Registered</p>
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

