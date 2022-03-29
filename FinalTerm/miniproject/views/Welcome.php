    <?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header("Location:Login.php");
    }
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>
    </head>
    <body style="background-color: <?php echo $bgcolor ?> ;">
    <h1> Welcome,<?php echo $_SESSION['username'];?></h1>
    <a href="Logout.php"><input type="button" value="Logout"></a>
    
</body>
</html>