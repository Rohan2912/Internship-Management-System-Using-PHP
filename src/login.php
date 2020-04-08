<?php
session_start();
$message="Hello Admin";
    $con = mysqli_connect('localhost', 'root', '','student_demo') or die('Unable To connect');


    if(isset($_POST['login']))  
    {  
        $user_name=$_POST['username'];  
        $user_pass=$_POST['password'];  
  
        $check_user="select * from login_user WHERE a_user='$user_name'AND a_password='$user_pass'";  
  
        $run=mysqli_query($con,$check_user);  
  
        if(mysqli_num_rows($run))  
        {  
            echo "<script>window.open('admin/index.php','_self')</script>";  
  
            $_SESSION['username']=$user_name;//here session is used and value of $user_email store in $_SESSION.  
  
        }  
        else  
        {  
            echo "<script>alert('Username or password is incorrect!')</script>";  
        }  
    }  
?>  