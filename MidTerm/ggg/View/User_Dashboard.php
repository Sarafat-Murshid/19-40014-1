<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container" style="margin-top:07%;margin-left:4%">
        <?php
        session_start();
        echo "<h2>welcome " . $_SESSION['username'] . "</h2>";
        ?>
        <form method="post">
            <ul>
                <li><a href="User_Dashboard.php">Dashboard</a></li>
                <li><a href="User_Profile.php">View Profile</a></li>
                <li><a href="Edit_Profile.php">Edit Profile</a></li>
                 <li><a href="Class_Routine.php">Class Schedule</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </form>
    </div>
</body>

</html>