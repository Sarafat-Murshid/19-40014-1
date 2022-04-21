    <?php
    session_start();
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
    </head>
    <body>
    <h1> Welcome,<?php echo $_SESSION['username'];?></h1>
    <?php  
            $file_data = file_get_contents("Users.json");
            $file_data = json_decode($file_data, true);
            foreach ($file_data as $data) {
                if ($data['username'] === $_SESSION['username'])

                    echo 'Firstname: '. $data['firstname'].'<br/>','Lastname: '. $data['lastname'].'<br/>','Email: '. $data['email'].'<br/>','Username: '. $data['username'].'<br/>','Religion: '. $data['religion'].'<br/>','Present Address: '. $data['address'].'<br/>','Date of Birth: '. $data['dob'].'<br/>';
                    

            }
    ?>
</body>
</html>