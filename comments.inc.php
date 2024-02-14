<?php

function setComments($conn){
  if(isset($_POST['commentSubmit'])) {
   $uid=$_POST['uid'];
   $date=$_POST['date'];
   $message=$_POST['message'];

   $sql="INSERT INTO comment5(uid, date, message) VALUES ('$uid','$date','$message')";

   $result = $conn->query($sql);
  }
 
}

function getComments($conn){
  $sql="SELECT * FROM comment5";
  $result = $conn->query($sql);
  while(  $row=$result->fetch_assoc()){
    echo "
    <div class='comment-box'><p>
    ".$row['uid']."<br>
     ".$row['date']."<br> ";
     echo nl2br($row['message']);
    echo "</p></div>";
  }

}