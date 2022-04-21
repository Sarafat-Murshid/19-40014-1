<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <style type="text/css">
        .error {
            color: red;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="./style.css">
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
    $err_db = "";
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

                     if (!empty($_POST['remember']))
                    {
                        setcookie("uname", $_POST['username'], time() + 60*60);
                        setcookie("pass", $_POST['password'], time() + 60*60);
                        $_SESSION['username'] = $uname;
                    } 
                    else 
                    {
                        setcookie("uname", "");
                        setcookie("pass", "");
                        echo "Cookie not set";
                    }
                }
                $err_db = "Invalid User";
            }

            
        }
    ?>
    <form class= "login-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <fieldset>
            <legend>LOGIN</legend>
            User Name: <input type="text" name="username" value="<?php if (isset($_COOKIE['uname'])) {
                                                                        echo $_COOKIE['uname'];
                                                                    } ?>">
            <span class="error"> <?php echo $err_uname ?></span>
            <br><br>
            Password: <input type="password" name="password" value="<?php if (isset($_COOKIE['pass'])) {
                                                                        echo $_COOKIE['pass'];
                                                                    } ?>">
            <span class="error"> <?php echo $err_pass ?></span>
            <br><br>
             
            <input type="checkbox" name="remember"> Remember me
            <br><br>
            <input class ="button-30" type="submit" name="submit" value="Login">
            <a href="registration.php"><input class ="button-30" type="button" value="Registration"></a>
            
            </fieldset>
        <span><?php echo $err_db?></span>
    </form>


    
</body>

</html>