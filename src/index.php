<!DOCTYPE html>
<html>
<head>
 <title>Main Page</title>
  <!-- <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1"> -->
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <!-- <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet"> -->


 <link rel="stylesheet" href="fonts/Oswald/Oswald.ttf">
 <link rel="stylesheet" href="fonts/Pacifico/Pacifico-Regular.ttf">
 <link rel="stylesheet" href="fonts/Oswald/Oswald.ttf">

 <script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="index.js"></script>
 

 <link rel="stylesheet" type="text/css" href="index.css">

</head>
<body>

<div class="container-fluid text-white">

 <nav class="row py-4">
  <div class="col-lg-9 col-md-9 col-12  logo">
   <h1><span class="colorchange">Internship Management System</span></h1><br>
   <span class="edina_tm_animation_text_word"></span>

 </nav>

 
  
 <div class="row main-content ">
  <div class="col-md-9 col-12 leftside"> </div>

   <div class="col-md-3 col-12 rightside d-flex justify-content-center align-items-center">
   <div class="right-content w-50 ">
   <h1>LOGIN HERE</h1>
   <button onclick="openForm()">ADMIN</button>
   <a href="registration.php"><button>STUDENT</button></a>

  <div class="form-group form-popup" id="myForm">
    <form action="login.php" class="form-container" method="post">
    <h1>Login</h1>

    <label for="username"><b>Username</b></label>
    <input class="form-control" type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input class="form-control" type="password" placeholder="Enter Password" name="password" required>

    <input type="submit" class="btn" name="login" value="Login">
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
    </form>
  </div>
  
  <script>
    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }
</script>

  </div>
  </div>
 </div>
</div>

</body>

</html>

