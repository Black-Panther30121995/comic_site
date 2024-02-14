<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css - Copy/bootstrap-grid.css">
  <link rel="stylesheet" href="css - Copy/bootstrap.css">
  <link rel="stylesheet" href="c.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Afacad:wght@600&family=Nunito:wght@900&family=Rubik+Bubbles&family=Rubik+Doodle+Shadow&display=swap" rel="stylesheet">
  <title>Document</title>
  <style>
    .genre{
      display: grid;
      grid-template-columns: 1fr 1fr 1fr 1fr 1fr; 
      column-gap: 15px;
      row-gap: 15px;
      margin-left: 15px;
      margin-top: 30px;
    }
    .genre1{
      cursor: pointer;
      display: flex;
    justify-content: center;
    align-items: center;
    height: 250px;
    width:250px;
    font-family: arial;
    font-size: 30px;
    color: white;
    font-weight: bold;
    border-radius: 100px;
    transition: height 1s, width 1s;
    }
    .full1{
    width:100%;
    background-color: #05386B;

    }
    .logo{
  height:100px;
  width:100px;
  border-radius: 50%;
}
.title{
  font-family: Nunito;
  color: white;
  font-size: 80px;
  text-align: center;
}
a{
  text-decoration: none;
}
.heading-title{
  display: flex;
  align-items: center;
  justify-content: center;
}
.full1{
    width:100%;
    background-color: #05386B;
    display: flex;
    justify-content: center;
    align-items: center;
}    
.logo{
  height:100px;
  width:100px;
  border-radius: 50%;
  margin-top: 10px;
  margin-bottom: 10px;
  margin-left: 10px;
  margin-right:40px;
}
.title{
  font-family: Nunito;
  color: white;
  font-size: 80px;
  text-align: center;
}
.genre1:hover{
  height:300px;
  width:300px;
}
  </style>
</head>
<body>
  <div class="full1">
    <img class="logo" src="logo.jpg">
    <a class="main"href="page.html"><h3 class="title">NOVICS</h3></a>
</div>
  <div class="genre">
    <div class="genre1" style="background-color: palevioletred;">
      <p>ROMANCE</p>
    </div>
    <div class="genre1" style="background-color: brown;">
      <p>ACTION</p>
    </div>
    <div class="genre1" style="background-color: purple;">
      <p>FANTASY</p>
    </div>
    <div class="genre1" style="background-color: darkorchid;">
      <p>COMEDY</p>
    </div>
    <div class="genre1" style="background-color: coral;">
      <p>SLICE OF LIFE</p>
    </div>
    <div class="genre1" style="background-color: blue;">
      <p>THRILLER</p>
    </div>
    <div class="genre1" style="background-color:cornflowerblue">
      <p>SCI-FI</p>
    </div>
    <div class="genre1" style="background-color: magenta;">
      <p>HORROR</p>
    </div>
    <div class="genre1" style="background-color:cadetblue">
      <p>THRILLER</p>
    </div>
    <div class="genre1" style="background-color:#05386B;">
      <p>SUPERNATURAL</p>
    </div>
    <!--<div class="genre1" style="background-color: blue;">
      <p>THRILLER</p>
    </div>-->
    <div class="genre1" style="background-color: blanchedalmond;">
      ADVENTURE
    </div>
    <div class="genre1" style="behavior: smooth;"></div>

  </div>
</body>
</html>