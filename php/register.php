<html>
<head>
<link href="../css/theme.css" rel="stylesheet">
<link href="../css/reg.css" rel="stylesheet">
</head>
<body>
<div class="topnav">
  <a  href="../php/home.php">Home</a>
  <a href="../php/events.php">Events</a>
  <a href="../php/points.php">Points Table</a>
  <a href="../php/results.php">Results</a>
</div> 
<center><h1>Registration<h1></center>
<div class = 'container'>
   <form action="../php/login.php" method = 'post'>
      Name:<br><input type="text" name="name" placeholder="Full Name" required>
      <br><br>Are you a:<br>
      <input type="radio" name="type" value="student" checked>Student<br>
      <input type="radio" name="type" value="teacher">Teacher<br><br>
      College ID:<br><input type="text" name="collegeid" placeholder="(Ex: u1703003)" required><br><br>
      Password:<br><input type="password" name="password" placeholder="Password" required><br><br>
      <br><br>DEPARTMENT:<br><br>
      <input type="radio" name="type" value="cse" checked>Computer Science & Engineering<br><br>
      <input type="radio" name="type" value="ece">Electronics and Communication Engineering<br><br>
      <input type="radio" name="type" value="eee">Electrical and Electronics Engineering<br><br>
      <input type="radio" name="type" value="me">Mechanical Engineering<br><br>
      <input type="radio" name="type" value="civil">Civil Engineering<br><br>
      <input type="radio" name="type" value="it">Information Technology<br><br><br>
      <center><input type="submit" value="Create Account"></center>
      <br><br>
   </form>
</div>
</body>
</html>