<?php
  date_default_timezone_set("Asia/Kolkata");

  $con =mysqli_connect('localhost','root','','watching');

  if(!$con){
    die("Connection failed: ".mysqli_connect_error());
  }
?>
<!DOCTYPE html>
<html lang="en">

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css - Copy/bootstrap-grid.css">
    <link rel="stylesheet" href="css - Copy/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Afacad:wght@600&family=Nunito:wght@900&family=Rubik+Bubbles&family=Rubik+Doodle+Shadow&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    
    img{
        width:300px;
        object-position:center;
        margin:20px;
        border-radius:10px;
      }
.heading{
  font-size:40px;
  text-align:center;
  font-weight:bold;
}
.header{
  background-color: rgb(2, 52, 88);
    color: white;
}
.container{
  box-shadow: 12px 12px 12px 10px rgba(0,0,0,0.4);
}
.book-name{
  font-size:28px;
  text-align:center;
  color:black;
  font-weight:bold;
}
.date{
  font-size:20px;
  text-align:center;
  color:gray;
}

    </style>
</head>
<body>
  <div class="header">
  <h2 class="heading">WATCHING</h2>
</div>
<div class=container>
<?php
$sql="SELECT * FROM watchinglist ORDER BY b_id ASC";
  $result = $con->query($sql);
  while(  $row=$result->fetch_assoc()){
    ?>

<table>
  <tr>
    <td style="width:400px; text-align:center">
    <img src="<?php echo $row['book_img']; ?>">
  </td>
    <td style="width:900px">
    <p class="book-name"><?php echo $row['book_name'];?></p>
     <p class="date"><?php echo $row['date'];?>
    </p>
  </td>
   <td>
    <a href='watching.php?rn=<?php echo $row['b_id']; ?>'><button class="btn btn-primary">Delete</button></a></td>
   </td>
  </tr>
  </table>

<?php
$b_id=$_GET['rn'];
$query="DELETE FROM watchinglist WHERE b_id='$b_id'";
$data=mysqli_query($con,$query);

  }
  ?>
  </div>
  
  
</body>

</html>