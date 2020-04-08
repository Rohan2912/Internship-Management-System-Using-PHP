
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
<title>My Project</title>
	<!-- <link rel="stylesheet" type="text/css" href="registration.css"> -->
	<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
	<script src="js\bootstrap.min.js"></script>
	<script src="jquery-3.4.1.min.js"></script>
</head>

<body>


<div class="container">
<div class="jumbotron ">
	<div class="container">
		<h1>Update Form</h1>
	</div>
</div>
</div>

<div class="container">
<form class="well form-horizontal" action="update.php?update_form=<?php echo $update_id; ?>" method="post">
<fieldset>

<!-- Text input-->


<div class="form-group">
<label class="col-md-4 control-label">ID: </label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input  name="n_id" value="<?php echo $update_id; ?>" class="form-control"  type="text" required="1" title="only contain letters" disabled>
</div>
</div>
</div>



<div class="form-group">
<label class="col-md-4 control-label">Name</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input  name="n_name" value="<?php echo $u_name; ?>" class="form-control"  type="text" required="1" title="only contain letters">
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label" >Email</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group ">
<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
<input name="n_email" value="<?php echo $u_email; ?>" class="form-control"  type="text" required="1" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" title="charactor followed by an '@' sign, followed by more charactor and than '.' sign and at least 2 charactor">
</div>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" >Contact NO.</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
<input name="n_contact" value="<?php echo $u_contact; ?>" class="form-control"  type="text" pattern="[0-9]{10}" required="1" title="only contain numbers">
</div>
</div>
</div>

<div class="form-group"> 
<label class="col-md-4 control-label">Degree</label>
<div class="col-md-4 selectContainer">
<div class="input-group">
	<span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
<select name="n_degree" class="form-control selectpicker" >
  <option value="<?php echo $u_degree; ?>"><?php echo $u_degree; ?></option>
  <option value='B.Tech(CE)'>B.Tech(CE)</option>
  <option  value='B.Tech(IT)'>B.Tech(IT)</option>
  <option  value='B.Tech(EC)'>B.Tech(EC)</option>
  <option  value='B.Tech(ME)'>B.Tech(ME)</option>
  <option  value='B.Tech(CL)'>B.Tech(CL)</option>
  <option  value='B.Tech(EE)'>B.Tech(EE)</option>
</select>
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label">University Name</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
<input  name="n_collage" value="<?php echo $u_college; ?>" class="form-control"  type="text" required="1" pattern="[A-Za-z]{}" title="only contain letters">
</div>
</div>
</div>


<div class="form-group"> 
<label class="col-md-4 control-label">Duration</label>
<div class="col-md-4 selectContainer">
<div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
<select name="n_duration" class="form-control selectpicker" required="1">
  <option value="<?php echo $u_dur; ?>"><?php echo $u_dur; ?></option>
  <option value="2 Week">2 Week</option>
  <option value="4 Week">4 Week</option>
  <option value="6 Week">6 Week</option>
  <option value="8 Week">8 Week</option>
  <option value="12 Week">12 Week</option>
</select>
</div>
</div>
</div>



<div class="form-group"> 
<label class="col-md-4 control-label">Techhnology Use</label>
<div class="col-md-4 selectContainer">
<div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-tasks"></i></span>
<select name="n_technology" class="form-control selectpicker" required="1">
  <option value="<?php echo $u_tech; ?>"><?php echo $u_tech; ?></option>
  <option value="PHP">PHP</option>
  <option value=".net">.net</option>
  <option value="Android">Android</option>
  <option value="Java">Java</option>
  <option value="Python">Python</option>
  <option value="IOT">IOT</option>
</select>
</div>
</div>
</div>


<div class="form-group">
<label class="col-md-4 control-label">Guide Name </label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input  name="n_guide" value="<?php echo $u_guide; ?>" class="form-control"  type="text" required="1" title="only contain letters">
</div>
</div>
</div>


<div class="form-group">
<label class="col-md-4 control-label">Join Date</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
<input  name="n_date" value="<?php echo $u_jdate; ?>" class="form-control"  type="date" required="1">
</div>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label">NOC </label>  
<div class="col-md-7 inputGroupContainer">
<div class="input-group">
<table border="0" width="100%">
<tr>
<td>&emsp;&emsp;&emsp;Yes<input name="n_noc"  class="form-control"  type="radio"  value='Yes'>&emsp;&emsp;&emsp;<br></td>
<td>&emsp;&emsp;&emsp;&emsp;&emsp;No<input  name="n_noc"  class="form-control"  type="radio"  value='No'>&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;</td>
</tr>
</table>
</div>
</div>
</div>

 <br>


<div class="form-group">
<label class="col-md-4 control-label"></label>
<div class="col-md-4"><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name='update'  class="btn btn-warning">
</div>
</div>

</fieldset>
</form>
</div>

</div><!-- /.container -->

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
  