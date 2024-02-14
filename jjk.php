<?php
  date_default_timezone_set("Asia/Kolkata");
  include 'dbh.inc2.php';
  include 'comments.inc2.php';
  $con =mysqli_connect('localhost','root','','watching');
  if(!$con){
  die("Connection failed: ".mysqli_connect_error());
  }
?>
<?php
session_start();
if(!isset($_SESSION["loggedin"])  || $_SESSION['loggedin']!=true)
{
  header("location: ../login.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style4.css">
    <link rel="stylesheet" href="c.css">
   
    <link rel="stylesheet" href="c.js">
    <title>JUJUTSU KAISEN</title>
     
</head>
<body>
    <div class="r"><img src="https://c4.wallpaperflare.com/wallpaper/912/632/988/jujutsu-kaisen-gojo-satoru-hd-wallpaper-preview.jpg" class="image1"><img src="https://c4.wallpaperflare.com/wallpaper/158/122/422/anime-anime-boys-jujutsu-kaisen-yuji-itadori-sakuna-hd-wallpaper-preview.jpg" class="image1"><img src="https://c4.wallpaperflare.com/wallpaper/990/436/972/jujutsu-kaisen-gojo-satoru-hd-wallpaper-preview.jpg" class="image1"></div>
    <div><br>
        <div class="container " style="background-color: rgb(247, 247, 247);">
            <div class="row form-control" style="background-color: rgb(159, 233, 233); font-size: 26px;">
                <div class="clr"><b>Jujutsu Kaisen</b></div>
                <div class="clr">
                    <script src="c.js"></script>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
            </div><br>
            <div class="row" style="padding-left: 100px;padding-right: 100px;">
                <div class="col-5">
                    <img src="https://w0.peakpx.com/wallpaper/43/891/HD-wallpaper-sukuna-yuji-itadori-jujutsu-kaisen.jpg" width="285px"><br><br>
                    <span style="margin-left: 50px;"><img src = "https://tse3.mm.bing.net/th?id=OIP.TwESrblIhpd2D8XG5VDz5QHaHa&pid=Api&P=0&h=180" height="40" size="40" onclick="openWhatsApp()">
                    <a href="http://www.facebook.com/share.php?u=https%3A%2F%2Fmyanimelist.net%2Fmanga%2F113138%2FJujutsu_Kaisen"><img src = "https://tse1.mm.bing.net/th?id=OIP.-NlF9-lDk4zCh-JTA4JaiAHaHa&pid=Api&P=0&h=180" height="40" size="40"></a>
                    <a href="http://reddit.com/submit?url=https%3A%2F%2Fmyanimelist.net%2Fmanga%2F113138%2FJujutsu_Kaisen&title=Jujutsu%20Kaisen"><img src = "https://tse2.mm.bing.net/th?id=OIP.Ifk2h4pNUcG3y5elgYzqnAHaHa&pid=Api&P=0&h=180" height="40" size="40"></a>
                    <a href="http://www.tumblr.com/share/link?url=https%3A%2F%2Fmyanimelist.net%2Fmanga%2F113138%2FJujutsu_Kaisen&name=Jujutsu%20Kaisen"><img src="https://tse3.mm.bing.net/th?id=OIP.gjww_Rt77uTW6c_VP8SGygHaHa&pid=Api&P=0&h=180" height="40" size="40"></a></span>
                
                    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" />
                        <div class="z" style="margin-left: 60px;"><form class="rating">
                            <label>
                                <input type="radio" name="stars" value="1" />
                                <span class="fa fa-star icon"></span>
                            </label>
                            <label>
                                <input type="radio" name="stars" value="2" />
                                <span class="fa fa-star icon"></span>
                                <span class="fa fa-star icon"></span>
                            </label>
                            <label>
                                <input type="radio" name="stars" value="3" />
                                <span class="fa fa-star icon"></span>
                                <span class="fa fa-star icon"></span>
                                <span class="fa fa-star icon"></span>   
                            </label>
                            <label>
                                <input type="radio" name="stars" value="4" />
                                <span class="fa fa-star icon"></span>
                                <span class="fa fa-star icon"></span>
                                <span class="fa fa-star icon"></span>
                                <span class="fa fa-star icon"></span>
                            </label>
                            <label>
                                <input type="radio" name="stars" value="5" />
                                <span class="fa fa-star icon"></span>
                                <span class="fa fa-star icon"></span>
                                <span class="fa fa-star icon"></span>
                                <span class="fa fa-star icon"></span>
                                <span class="fa fa-star icon"></span>
                            </label>
                        </form></div>
                        <h5 style="margin-left: 60px;">Rate this Comic</h5>
                </div>
                <div class="col-7"><br><br>
                    <div><h3 class="clr">Synopsis</h3></div>
                    <div>
                        <p>
                          Yuji Itadori, a kind-hearted teenager, joins his school's Occult Club for fun, but discovers that its members are actual sorcerers who can manipulate the energy between beings for their own use. He hears about a cursed talisman - the finger of Sukuna, a demon - and its being targeted by other cursed beings. Yuji eats the finger to protect his friends, and ends up becoming Sukuna's host. However, Yuji discovers that he has inherited magic and is able to control this power without interference from Sukuna. He joins the Tokyo Metropolitan Magic Technical College to consumes all of Sukuna's fingers, which will enable a full exorcism to take place that will free him.
                        </p>
                    </div>
                </div>
            </div><br><hr><br>
            <div class="row" style="padding-left: 230px;padding-right: 100px;">
                <div class="col-6">
                    <h4>Alternate Titles</h4>
                    <h7><b>Synonyms:</b>  I Want to Be You, Just For A Day<br>
                        <b>Japanese:</b> 하루만 네가 되고 싶어<br>
                        <b>English:</b> Your Throne</h7><br><br><br>

                    <h4>Available At</h4>
                    <a href="https://comic.naver.com/webtoon/list.nhn?titleId=738487" style="text-decoration: none;">Official Site</a><br>
                </div>
                <div class="col-6">
                    <h4>Information</h4>
                    <h7><b>Type:</b> <a href="https://r.search.yahoo.com/_ylt=AwrPrUN8e6VlR68fdGW7HAx.;_ylu=Y29sbwNzZzMEcG9zAzEEdnRpZAMEc2VjA3Ny/RV=2/RE=1705372668/RO=10/RU=https%3a%2f%2fen.wikipedia.org%2fwiki%2fManhwa/RK=2/RS=4sl7v1mOsMORm.64xaR.Mjzk8gg-" style="text-decoration: none;"> Manhwa</a><br>
                        <b>Volumes:</b> Unknown<br>
                        <b>Chapters:</b> Unknown<br>
                        <b>Status:</b> Publishing<br>
                        <b>Published:</b> Jan 6, 2020 to ?</h7><br>
                        <b>Genres:</b>  Drama, Fantasy, Romance<br>
                        <b>Authors:</b> SAM<br>
                </div>
            </div><br><hr><br>
            <div class="row" style="padding-left: 80px;padding-right: 150px;">
                <div class="col-4">
                    <div class="form-group"><?php
            echo " <form method='POST' action='".setWatching($con)."'> 
            <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
            <button type='Watching' class='watching' name='Watching'>WATCHING</button> ";
            ?></div>
                </div>
                <div class="col-4">
                    <div class="form-group"><?php
            echo " <form method='POST' action='".completed($con)."'> 
            <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
            <button type='Watching' class='watching' name='Completed'>COMPLETED</button> ";
            ?></div>
                </div>
                <div class="col-4">
                    <div class="form-group"><?php
            echo " <form method='POST' action='".planning($con)."'> 
            <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
            <button type='Watching' class='watching' name='Planning'>PLANNING TO WATCH</button> ";
            ?></div>
                </div>
            </div>

        </div>
    </div>
    <hr>
    <div class="container">
<div class="chapters-row" style="background-color: rgb(244, 244, 244); display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding-bottom:20px">
    <div class="row">
        <div class="col-3">
            <h2 style="color: rgb(2, 39, 66);margin-left:20px">CHAPTERS</h2>
        </div>
        <div class="col-9"></div>
    </div>
    <hr>
    <div class="chapters">
    <a class="chap" href="chapter-1.php"><div class="chapter" style="  display: flex;justify-content:center;
    align-items: center;
    text-align: center;
    padding-top: 3px;">Chapter 1</div></a>
      <a class="chap" href="chapter-2.php"><div class="chapter" 
      style="  display: flex;justify-content:center;
    align-items: center;
    text-align: center;
    padding-top: 3px;">Chapter 2</div></a>
      <a class="chap" href="chapter-3.php"><div class="chapter" style="  display: flex;justify-content:center;
    align-items: center;
    text-align: center;
    padding-top: 3px;">Chapter 3</div></a>
      <a class="chap" href="chapter-4.php"><div class="chapter" style="  display: flex;justify-content:center;
    align-items: center;
    text-align: center;
    padding-top: 3px;">Chapter 4</div></a>
      <a class="chap" href="chapter-5.php"><div class="chapter" style="  display: flex;justify-content:center;
    align-items: center;
    text-align: center;
    padding-top: 3px;">Chapter 5</div></a>

      <a class="chap" href="chapter-6.php"><div class="chapter" style="  display: flex;justify-content:center;
    align-items: center;
    text-align: center;
    padding-top: 3px;">Chapter 6</div></a>
      <a class="chap" href="chapter-7.php"><div class="chapter" style="  display: flex;justify-content:center;
    align-items: center;
    text-align: center;
    padding-top: 3px;">Chapter 7</div></a>
      <a class="chap" href="chapter-8.php"><div class="chapter" style="  display: flex;justify-content:center;
    align-items: center;
    text-align: center;
    padding-top: 3px;">Chapter 8</div></a>
      <a class="chap" href="chapter-9.php"><div class="chapter" style="  display: flex;justify-content:center;
    align-items: center;
    text-align: center;
    padding-top: 3px;">Chapter 9</div></a>
      <a class="chap" href="chapter-10.php" ><div class="chapter" style="  display: flex;justify-content:center;
    align-items: center;
    text-align: center;
    padding-top: 3px;">Chapter 10</div></a>
      <a class="chap" href="chapter-11.php"><div class="chapter" style="  display: flex;justify-content:center;
    align-items: center;
    text-align: center;
    padding-top: 3px;">Chapter 11</div></a>
      <a class="chap" href="chapter-12.php"><div class="chapter" style="  display: flex;justify-content:center;
    align-items: center;
    text-align: center;
    padding-top: 3px;">Chapter 12</div></a>
      <a class="chap" href="chapter-13.php"><div class="chapter" style="  display: flex;justify-content:center;
    align-items: center;
    text-align: center;
    padding-top: 3px;">Chapter 13</div></a>
      <a class="chap" href="chapter-14.php"><div class="chapter" style="  display: flex;justify-content:center;
    align-items: center;
    text-align: center;
    padding-top: 3px;">Chapter 14</div></a>
      <a class="chap" href="chapter-15.php"><div class="chapter" style="  display: flex;justify-content:center;
    align-items: center;
    text-align: center;
    padding-top: 3px;">Chapter 15</div></a>
      </div>
      </div>
</div>
</div>
<hr>
<div class="comments" style="background-color: rgb(244, 244, 244);
     display: flex;
    flex-direction: column; padding-left:10px">
    <h2 style="color: rgb(2, 39, 66);margin-left:20px">COMMENTS</h2>
    <?php
  echo "<form method='POST' action='".setComments($conn)."'> 
    <input type='hidden' name='uid' value='Anonymous'>
    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
    <textarea name='message'></textarea><br>
    <button type='submit' name='commentSubmit'>Comment</button>
  </form>";
  getComments($conn);
  ?>
   <?php

function setWatching($con){
  if(isset($_POST['Watching'])) {
   $book_name='Jujutsu Kaisen';
   $date=$_POST['date'];
   $book_img='https://upload.wikimedia.org/wikipedia/en/4/46/Jujutsu_kaisen.jpg';

   $sql="INSERT INTO watchinglist(book_name, date, book_img) VALUES ('$book_name','$date','$book_img')";

   $result = $con->query($sql);
  }
 
}
function completed($con){
  if(isset($_POST['Completed'])) {
   $book_name='Jujutsu Kaisen';
   $date=$_POST['date'];
   $book_img='https://upload.wikimedia.org/wikipedia/en/4/46/Jujutsu_kaisen.jpg';

   $sql="INSERT INTO completed(book_name, date, book_img) VALUES ('$book_name','$date','$book_img')";

   $result = $con->query($sql);
  }
}

 

function planning($con){
    if(isset($_POST['Planning'])) {
     $book_name='Jujutsu Kaisen';
     $date=$_POST['date'];
     $book_img='https://upload.wikimedia.org/wikipedia/en/4/46/Jujutsu_kaisen.jpg';
  
     $sql="INSERT INTO planning_to_watch(book_name, date, book_img) VALUES ('$book_name','$date','$book_img')";
  
     $result = $con->query($sql);
    }
}

?>
</body>
</html>
