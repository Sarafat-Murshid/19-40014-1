<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  min-height: 100vh;
  width: 100%;
  background-image: linear-gradient(rgba(4, 9, 30, 0.7),rgba(4, 9, 30, 0.7)),url(background.jpg);
  background-position: center;
  background-size: contain;
  position: relative;	
  font-family: sans-serif;
  color: darkgoldenrod;
     
}

/* Style the header */
.header {
  padding: 20px;
  text-align: center;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.logo{
  height: 100px;
  width: 100px;
  position: sticky;
}

</style>
</head>
<body>
<a href="Welcome.php"><img class="logo" src="logo.png"></a>
<div class="header">
  <h1>University Management System</h1>
</div>

<div class="topnav">
  <a href="Welcome.php">Home</a> 
	<a href="profile.php">Profile</a>	
	<a href="accounts.php">Inventory</a>
	<a href="employee.php">Employee</a>
  <a href="student.php">Student</a>
  <a href="event.php">Event</a>
  <a href="searchemployee.php">Search Employee</a>
  <a href="searchstudent.php">Search Student</a>
  <a href="searchevent.php">Search Event</a>
	<a href="../controller/Logout.php">Logout</a>
</div>

</body>
</html>


