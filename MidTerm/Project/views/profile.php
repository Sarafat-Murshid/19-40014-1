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
    if ($_SERVER['REQUEST_METHOD'] === "POST"){
        header("Location: cpassword.php");
    }
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Profile</title>
    </head>
    <body style="background-color: <?php echo $bgcolor ?> ;">
    <br><br><br>
    <h1>Profile</h1>
    <p>
    <?php  
            $file_data = file_get_contents("Users.json");
            $file_data = json_decode($file_data, true);
            foreach ($file_data as $data) {
                if ($data['username'] === $_SESSION['username'])

                    echo 'Firstname: '. $data['firstname'].'<br/>','Lastname: '. $data['lastname'].'<br/>','Email: '. $data['email'].'<br/>','Username: '. $data['username'].'<br/>','Religion: '. $data['religion'].'<br/>','Present Address: '. $data['address'].'<br/>','Date of Birth: '. $data['dob'].'<br/>';
                    

            }
    ?>
    <p>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <input type="submit" name="submit" value="Change Password">
</form>
</body>
</html>