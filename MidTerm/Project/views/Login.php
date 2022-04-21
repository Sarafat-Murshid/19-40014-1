<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <style type="text/css">
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <h1>Login</h1>
    <?php require 'Navbar.php'; ?>
    <?php
    session_start();
    if (isset($_SESSION['username'])) {
        header("location:Welcome.php");
    }
    ?>

    <?php
    $nameErr = $passErr = "";
    $username = $pass = "";
    if (isset($_POST["submit"])) {

        if (empty($_POST["username"])) {
            $nameErr = "Name is required";
        }  if (empty($_POST["password"])) {
            $passErr = "Pass is required";
        } else {
            $username = $_POST['username'];
            $file_data = file_get_contents("Users.json");
            $file_data = json_decode($file_data, true);
            foreach ($file_data as $data) {
                if ($data['username'] === $_POST['username'] and $data['password'] === $_POST['password']) {
                    $_SESSION['username'] = $username;
                    header("location:Welcome.php"); }
                else 
                    echo "User not found";    
            }
        }
    }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <fieldset>
            <legend>LOGIN</legend>
            User Name: <input type="text" name="username">
            <span class="error">* <?php echo $nameErr ?></span>
            <br><br>
            Password: <input type="password" name="password">
            <span class="error">* <?php echo $passErr ?></span>
            <br><br>
            
            <input type="submit" name="submit" value="Login">
 
        </fieldset>
    </form>


    
</body>

</html>