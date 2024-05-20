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

$result = mysqli_query($mysqli, "SELECT * FROM inventory");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inventory</title>
    <link rel="stylesheet" type="text/css" href="./infotable.css">
</head>
<body style="background-color: <?php echo $bgcolor ?> ;">
<br>
<div class="header1">
    <h1>Inventory</h1>
</div>
<div class="container">
    <p>
        <a class="button-link create" href="create.php">Create new Inventory</a>
    </p>

    <table border="0" width="100%" class="table">
        <thead>
        <tr>
            <th></th>
            <th>Room Number </th>
            <th>Annex</th>
            <th>Chair</th>
            <th>Table</th>
            <th>Computers</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while($res = mysqli_fetch_array($result)) {     
            
            echo "<tr>";
            echo "<td>"; 
            echo "</td>";
            echo "<td>".$res['room_no']."</td>";
            echo "<td>".$res['annex']."</td>";
            echo "<td>".$res['chair']."</td>";  
            echo "<td>".$res['tables']."</td>";   
            echo "<td>".$res['computer']."</td>"; 
            echo "<td><a href=\"update.php?id=$res[id]\" class=\"button-link update\">Update</a> | <a href=\"delete.php?id=$res[id]\" class=\"button-link delete\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
            echo "</tr>";    
        }
        ?>
        </tbody>
    </table>
</div>    
</body>