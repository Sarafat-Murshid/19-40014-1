<?php session_start(); ?>

<?php
if (!isset($_SESSION['username'])) {
        header("Location:Login.php");
    }
?>

<?php

include("../model/connection.php");

$id = $_GET['id'];

$result=mysqli_query($mysqli, "DELETE FROM event WHERE id=$id");

header("Location:event.php");
?>
