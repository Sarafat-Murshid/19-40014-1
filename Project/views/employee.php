<?php
    session_start();
    $bgcolor="";

    if(isset($_COOKIE['bgcolor'])){
        $bgcolor = $_COOKIE['bgcolor'];
    }
    else{
        $bgcolor="#FFFFFF";
    }
    if (!isset($_SESSION['username'])) {
        header("Location:Login.php");
    }
    ?>
    <?php include "Navbar2.php"?>
<?php

include_once("../model/connection.php");

$result = mysqli_query($mysqli, "SELECT * FROM employee");
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee</title>
    <link rel="stylesheet" type="text/css" href="./infotable.css">
</head>
<body style="background-color: <?php echo $bgcolor ?> ;">
<br>
<div class="header1">
    <h1>Employee</h1>
</div>
<div class="container">
    <p>
        <a class="button-link create" href="create1.php">Create new Employee</a>
    </p>

    <table border="0" width="100%" class="table">
        <thead>
        <tr>
            <th></th>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Website</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while($res = mysqli_fetch_array($result)) {     
            echo "<td>"; 
            echo "</td>";
            echo "<td>".$res['name']."</td>";
            echo "<td>".$res['username']."</td>"; 
            echo "<td>".$res['email']."</td>";
            echo "<td>".$res['phone']."</td>";  
            echo "<td>".$res['url']."</td>";   
            echo "<td><a href=\"update1.php?id=$res[id]\" class=\"button-link update\">Update</a> | <a href=\"delete1.php?id=$res[id]\" class=\"button-link delete\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
            echo "</tr>";    
        }
        ?>
        </tbody>
    </table>
</div>    
</body>
</html>