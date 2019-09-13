<html>
<head>
<meta charset="utf-8">
    <title>Festio</title>
    <link href="../css/home.css" rel="stylesheet">
    <link href="../css/theme.css" rel="stylesheet">

</head>
<body>
<div class="topnav">
  <a class="active" href="../php/home.php">Home</a>
  <a href="../php/events.php">Events</a>
  <a href="../php/points.php">Points Table</a>
  <a href="../php/results.php">Results</a>
</div> 

<div class="image"> <!-- the image container -->
    <img src="../images/tst1.jpg" alt="img"> <!-- the image -->
    <h1 class = 'imgtxt'>
    <span>TECHKSHETRA<span class='spacer'></span><br /><!-- span tag to beautify it efficiently -->
    </h1> <!-- the text -->
</div>
<br><br><br>
<div class='footnote'>
<footer>
    Rajagiri School of Engineering & Technology<br>Rajagiri Valley,Kakkanad<br>Kochi-682025<br>Kerala
  </footer>
</div>
  <div class="container">
  <center><h2>LOGIN</h2></center>
    <form action="../php/login.php" method = 'post'>
      <div class="row">
        <div class="col">
          <div class="hide-md-lg">
          </div>

          <input type="text" name="username" placeholder="Username" required>
          <input type="password" name="password" placeholder="Password" required>
          <input type="submit" value="Sign In">
        </div>
      </div>
    </form>
    <div class="bottom-container">
              <a href="../php/register.php" style="color:white" class="btn">Register</a>
    </div> 
  </div>
</body>
</html>
