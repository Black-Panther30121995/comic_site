<?php

function setWatching($con){
  if(isset($_POST['Watching'])) {
   $book_name='Your Throne';
   $date=$_POST['date'];
   $book_img='https://swebtoon-phinf.pstatic.net/20200513_169/1589334371783aBm6j_JPEG/04_EC9E91ED9288EC8381EC84B8_mobile.jpg?type=crop540_540';

   $sql="INSERT INTO watchinglist(book_name, date, book_img) VALUES ('$book_name','$date','$book_img')";

   $result = $con->query($sql);
  }
 
}

