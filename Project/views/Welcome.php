    <?php
    session_start();
    $bgcolor="#FFFFFF";

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
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>
        <style>
            .header1{
                color: white;
            }
        </style>
    </head>
    <body style="background-color: <?php echo $bgcolor ?> ;">
    <h1 class ="header1" > Welcome,<?php echo $_SESSION['username'];?></h1>
    
</body>
</html>