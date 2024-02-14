<?php
include '_dbconnect.php';
if(isset($_POST["submit"]))
{
  $showAlert=false;
  $showError=false;
  $username=$_POST["username"];
  $password=$_POST["password"];
  $cpassword=$_POST["cpassword"];
  $exists=false;
  $existSql= "SELECT * FROM `users` WHERE username='$username'";
  $result=mysqli_query($conn,$existSql);
  $numExistRows = mysqli_num_rows($result);
  if($numExistRows >0)
  {
    $showError= "Username Already Exists";
  }
  else{
    $exists=false;
  if(($password == $cpassword) && $exists == false){
    $sql= "INSERT INTO `users` (`username`, `password`, `date`) VALUES ('$username', '$password' , current_timestamp())";
    $result= mysqli_query($conn, $sql);
    if($result)
    {
      $showAlert= true;
    }
    else{
      $showError= "Passwords do not match";
    }
  }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css - Copy/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Afacad:wght@600&family=Nunito:wght@900&family=Rubik+Bubbles&family=Rubik+Doodle+Shadow&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  <title>Sign Up </title>
  <style>
        .alert {
            padding: 20px;
            color: white;
            text-align: center;
            font-size: 18px;
            border-radius: 8px;
            margin-top: 20px;
            font-weight:bold;
        }
    </style>
</head>

<body>
<div class="header">
    <div class="container">
      <div class="row">
        <div class="col-md-1">
          <img class="logo" style="margin-bottom:10px" src="images/logo.jpg">
        </div>
        <div class="col-md-3">
          <a class="main"href="page.php"><h3 class="title">NOVICS</h3></a>
        </div>
        <div class="col-md-8">
          <div class="nav justify-content-md-end">
            <a href="signup.php" class="nav-link" style="font-size: 18px;color:black;margin-right: 10px;">SIGNUP</a>
            <a href="login.php" class="nav-link" style="font-size: 18px;color:black;margin-right: 10px;">LOGIN</a>
    
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
    if ($showAlert) {
        echo "<div class='alert' style='background-color:green'>You have successfully registered!</div>";
    }
    else{
    echo '<div class="alert" style="background-color:red">Error! Passwords do not match or username already exists</div>;';
  }

?>

<div class="container my-4">
  <form method="post">
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username" placeholder="Enter username">
   </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="cpassword">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password">
    <small id="emailHelp" class="form-text text-muted">Remember to type the same password</small>
  </div>
 
  <button type="submit" name="submit" id="submit" class="btn btn-info">SUBMIT</button>
 </form>
</div>
</body>
</html>