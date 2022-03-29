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
    <?php require "../model/dbconfig.php"?>
    <?php
    session_start();
    if (isset($_SESSION['username'])) {
        header("location:Welcome.php");
    }
    ?>

    <?php
    function authenticate($uname,$pass){
                $query = "select * from user where username='$uname' and password='$pass'";
                $rs = get($query);
                if(count($rs)>0){
                    return true;
                }
            return false;
            }
    $uname = "";
    $err_uname = "";
    $pass = "";
    $err_pass = "";
    $hasError = "";
    if(isset($_POST["submit"])){

        if(empty($_POST["username"])){
                $err_uname = "*Username Required";
                $hasError = true;
            }
            else{
                $uname = $_POST["username"];
            }
            if(empty($_POST["password"])){
                $err_pass = "*Password Required";
                $hasError = true;
            }
            else{
                $pass = $_POST["password"];
            }
            if(!$hasError){
                if(authenticate($uname,$pass)){
                    $_SESSION["username"]= $uname;
                    header("Location: Welcome.php");
                }
                $err_db = "User Invalid";
            }

            
        }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <fieldset>
            <legend>LOGIN</legend>
            User Name: <input type="text" name="username">
            <span class="error"> <?php echo $err_uname ?></span>
            <br><br>
            Password: <input type="password" name="password">
            <span class="error"> <?php echo $err_pass ?></span>
            <br><br>
            
            <input type="submit" name="submit" value="Login">
            <a href="registration.php"><input type="button" name="button" value="Registration"></a>
        </fieldset>
    </form>


    
</body>

</html>