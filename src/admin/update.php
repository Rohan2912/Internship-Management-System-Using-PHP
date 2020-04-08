<?php
  session_start();  
?>


<?php
  $conn2=mysqli_connect('localhost','root','','student_demo');

  $update_record = @$_GET['id'];
  

  $qu="SELECT * FROM u_reg WHERE u_id='$update_record'";
  $run1=mysqli_query($conn2,$qu);

  while ($row=mysqli_fetch_array($run1))
  {
     $update_id=$row['u_id'];
     $u_name=$row[0];
     $u_email=$row[1];
     $u_contact=$row[2];
     $u_degree=$row[3];
     $u_college=$row[4];
     $u_dur=$row[5];
     $u_tech=$row[6];
     $u_guide=$row[7];
     $u_jdate=$row[8];
     $u_NOC=$row[9];
     
  }

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
                    
                    <div class="container-fluid ">

  
                    <div class="row">
                    <div class="col-md-3"> </div>
                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-30 header-title">Update Form</h4>

                                    <form role="form" action="update.php?update_form=<?php echo $update_id; ?>" method="post">


                                        <div class="form-group">
                                            <label for="id">ID: </label>
                                            <input type="text" class="form-control"  name="n_id" value="<?php echo $update_id; ?>" disabled>
                                           
                                        </div>

                                        <div class="form-group">
                                            <label for="name">Name </label>
                                            <input type="text" class="form-control" name="n_name" value="<?php echo $u_name; ?>" >
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label for="email">Email </label>
                                            <input type="email" class="form-control" name="n_email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" value="<?php echo $u_email; ?>" >
                                        </div>

                                        
                                        <div class="form-group">
                                            <label for="contact">Contact </label>
                                            <input type="text" class="form-control" name="n_contact" value="<?php echo $u_contact; ?>" pattern="[0-9]{10}"  >
                                        </div>
                                                            
                                        <div class="form-group col-md-12">
                                                <label for="inputState" class="col-form-label">Degree</label>
                                                <select name="n_degree"  class="form-control">
                                                

                                                <option value="<?php echo $u_degree; ?>"><?php echo $u_degree; ?></option>
                                                <option value='B.Tech(CE)'>B.Tech(CE)</option>
                                                <option  value='B.Tech(IT)'>B.Tech(IT)</option>
                                                <option  value='B.Tech(EC)'>B.Tech(EC)</option>
                                                <option  value='B.Tech(ME)'>B.Tech(ME)</option>
                                                <option  value='B.Tech(CL)'>B.Tech(CL)</option>
                                                <option  value='B.Tech(EE)'>B.Tech(EE)</option>
                                                
                                                
                                                </select>
                                            </div>

                                            <div class="form-group">
                                            <label for="uniname">University Name </label>
                                            <input type="text" class="form-control" name="n_collage" value="<?php echo $u_college; ?>" pattern="[A-Za-z]{}" >
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="dur">Duration</label>
                                            
                                            <select name="n_duration" class="form-control">
                                                
                                            <option value="<?php echo $u_dur; ?>"><?php echo $u_dur; ?></option>
                                            <option value="2 Week">2 Week</option>
                                            <option value="4 Week">4 Week</option>
                                            <option value="6 Week">6 Week</option>
                                            <option value="8 Week">8 Week</option>
                                            <option value="12 Week">12 Week</option>
                                                </select>
                                        </div>
                                        

                                        <div class="form-group">
                                            <label for="tech">Technology Use </label>
                                            
                                            <select name="n_technology" class="form-control">
                                                
                                            <option value="<?php echo $u_tech; ?>"><?php echo $u_tech; ?></option>
                                            <option value="PHP">PHP</option>
                                            <option value=".net">.net</option>
                                            <option value="Android">Android</option>
                                            <option value="Java">Java</option>
                                            <option value="Python">Python</option>
                                            <option value="IOT">IOT</option>
                                            
				                            <option value="Cloud Computing">Cloud Computing</option>
                                            <option value="GIS">GIS</option>
                                            <option value="Artificial Intelligence">Artificial Intelligence</option>
                                            <option value="Web Development">Web Development</option>

                                            </select>

                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="gname">Guide Name </label>
                                            <input type="text" class="form-control" name="n_guide" value="<?php echo $u_guide; ?>" >
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="name">Join Date</label>
                                            <input type="date" class="form-control" name="n_date" value="<?php echo $u_jdate; ?>" >
                                        </div>
                                        
                                                   
                                        <div class="form-group">
                                            <label for="noc">NOC </label>
                                            <table border="0" width="100%">
                                            <tr>
                                            <td>&emsp;&emsp;&emsp;Yes<input name="n_noc"  class="form-control"  type="radio"  value='Yes'>&emsp;&emsp;&emsp;<br></td>
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;No<input  name="n_noc"  class="form-control"  type="radio"  value='No'>&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;</td>
                                            </tr>
                                            </table>

                                        </div>



                                        <input type="submit" class="btn btn-warning" name="update">
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

  include 'connection.php';


  if(isset($_POST['update'])){

  $id1=$_GET['update_form'];
    
  $name1=$_POST['n_name'];
	$email1=$_POST['n_email'];
	$contact1=$_POST['n_contact'];
	$degree1=$_POST['n_degree'];
	$collage1=$_POST['n_collage'];
	$dur1=$_POST['n_duration'];
	$tech1=$_POST['n_technology'];
	$guide1=$_POST['n_guide'];
	$date1=$_POST['n_date'];
	$noc1=$_POST['n_noc']; 

    // echo $id1;
    // echo "Hello ";

    $q="UPDATE u_reg SET u_name = '$name1',  u_email = '$email1', u_contact = $contact1 , u_degree ='$degree1', u_college ='$collage1' , u_dur ='$dur1' , u_tech ='$tech1' , u_guide ='$guide1' , u_jdate = '$date1' , u_NOC ='$noc1' 
    WHERE u_id = '$id1'  ";


  $update = mysqli_query($conn,$q);
     
 if($update)
 {
  echo "<script>window.open('view.php?updated=ID: $id1 has been Updated..!','_self')</script>";
  
 }
//  else{
//    echo "not updated";
//  }

 
 }

?> 
  