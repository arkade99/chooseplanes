<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register here </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .arka{ list-style-type: none;
  background-color: rgb(36, 173, 174);
  font-family:"Segoe UI" ,Arial ,sans-serif;
}

li a:hover:not(.active) {
  background-color: #fff;
}
  </style>
  
</head>
<body style="background-color: rgba(255, 0, 77, 0.1);">
<nav class="navbar navbar-expand-sm sticky-top navbar-dark arka"> 
  
      
      <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#collapse_Navbar"> 
        <span class="navbar-toggler-icon"></span> 
      </button> 
      
      <div class="collapse navbar-collapse" id="collapse_Navbar"> 
        <ul class="navbar-nav"> 
          <li class="nav-item " > 
            <a class="nav-link" href="index.html"  style="color:#000;"><i class="fa fa-fw fa-home"></i>Home</a></li>
          <li class="nav-item " > 
            <a class="nav-link" href="see.php"  style="color:#000;"><i class="fa fa-fw fa-home"></i>Enter Your plan</a></li></div> 
      <li style="float:right;"><a class="active" style="color: #000;" href="log_in.php"><i class="fa fa-fw fa-user"></i>Log In</a> 
    </nav> 
<div class="container-fluid">
  <br>

  <div class="row justify-content-center align-items-center" style="height:100%">
  <div class="col-md-7" >
  <h2 style="font-size: 200%;color:rgb(255, 94, 0);font-family:sans-serif;"><strong>Register here: </strong> </h2>
  <!-- This is card -->
  <div class="card bg-dark text-white">
  <div class="card-body">
    <!-- This is form -->
  <form action="#" name="myform" method="post" onsubmit="return validateform()">
    <div class="form-group">
      <label for="email" >Email :</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" >
    </div>

    <div class="form-group">
      <label for="name">Name :</label>
      <input type="name" class="form-control" id="name" placeholder="Enter your name " name="name">
    </div>

    <div class="form-group">
      <label for="mobile" >Enter mobile number :</label>
      <input type="mobile" class="form-control" id="mobile" placeholder="Enter mobile no" name="mobile" >
    </div>
    <div class="form-group">
      <label for="pwd">Password : </label>
      <input type="Password" class="form-control" id="pwd" placeholder="Enter password" name="Apassword" >
      <input type="checkbox" onclick="arkapassaward()">Show Password
    </div>
    <div class="form-group">
      <label for="mypasswordarka">Conferm Password : </label>
      <input type="Password" class="form-control" id="mypasswordarka" placeholder="Enter password" name="Bpassword" >
    </div>
    </div>
    <button type="submit" class="btn btn-success">Create my free account</button>
    <br>
</form>
  <!-- End of form -->
</div>
</div>
<!-- End of card C:\xampp\htdocs\test1 beginer\Quiz_7\sign_up.html -->
</div>
</div>
</div>

</body>
</html>
<script>
function validateform(){  
var name = document.forms["myform"]["name"];      
  var email = document.forms["myform"]["email"]; 
  var phone = document.forms["myform"]["mobile"]; 
  var psw1 = document.forms["myform"]["Apassword"]; 
  var psw2 = document.forms["myform"]["Bpassword"]; 
  if (email.value == "")                 
  { 
    window.alert("Please enter a valid e-mail address."); 
    email.focus(); 
    return false; 
  }    
if (name.value == "")                
  { 
    window.alert("Please enter your name."); 
    name.focus(); 
    return false; 
  }   
if (phone.value == "")             
  { 
    window.alert("Please enter your Mobile number."); 
    phone.focus(); 
    return false; 
  } 
  if (psw1.value == "")
  {
  window.alert("Enter Password");
   psw1.focus();
  return false;
}
if (psw2.value == "")
  {
  window.alert("Conferm Password");
   psw2.focus();
  return false;
}
if (psw1.value!=psw2.value) 
{
  window.alert("Both Password must be same. Please re-enter password");
   psw2.focus();
  return false;
}
}

function arkapassaward()  {
  var x = document.getElementById("pwd");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

 
</script>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
$email= $_POST['email'];
$Name= $_POST['name'];
$Mobile= $_POST['mobile'];
$mypass= $_POST['Bpassword'];
$conn = mysqli_connect("localhost", "root", "", "choose_your_planes");
$sql ="INSERT INTO `sign_in` ( `Email`, `Name`, `Mobile_No`, `Password`) VALUES ( '$email', '$Name', '$Mobile', '$mypass');";
$result= mysqli_query($conn,$sql); 
if ($result) {
  echo '<div class="alert alert-warning"> <strong>Database Inserted successfully!</strong>  </div>';}
else
{
  echo "Record does not insert successfully". mysqli_error($conn);
}
}

?>



