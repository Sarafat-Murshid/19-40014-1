<?php
session_start();
if (isset($_SESSION['username'])) {
    header("location:Dashboard.php");
}
?>

<?php
include '../Controller/Registration_Logic.php';
include '../Controller/Validation.php';
$nameErr = $passErr = "";
$username = $pass = "";
$admin_name = "Admin";
$admin_Password = "hsgch@26r3";
if (isset($_POST["submit"])) {

    if (empty($_POST["username"])) {
        $nameErr = "Name is required";
    } else if (empty($_POST["password"])) {
        $passErr = "pass is required";
    } else {
        $username = $_POST['username'];
        $file_data = dataloading();
        foreach ($file_data as $data) {
            if ($data['username'] === $_POST['username'] and $data['password'] === $_POST['password']) {
                $_SESSION['username'] = $username;
                header("location:User_Dashboard.php");

                validation();
            }
        }
        if ($admin_name == $_POST['username'] and $admin_Password == $_POST['password']) {
            $_SESSION['username'] = $username;
            header("location:Dashboard.php");

            validation();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style type="text/css">
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <h1>Home Mavens</h1>
    <div class="container" style="margin-top:07%;height:100vh;width:400px;">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <fieldset>
                <legend>LOGIN</legend>
                User Name: <input type="text" name="username" class="form-control" value="<?php if (isset($_COOKIE['uname'])) {
                                                                                                echo $_COOKIE['uname'];
                                                                                            } ?>">
                <span class="error">* <?php echo $nameErr ?></span>
                <br><br>
                Password: <input type="password" name="password" class="form-control" value="<?php if (isset($_COOKIE['pass'])) {
                                                                                                    echo $_COOKIE['pass'];
                                                                                                } ?>">
                <span class="error">* <?php echo $passErr; ?></span>
                <br><br>
                <input type="checkbox" name="remember"> Remember me
                <br><br>
                <input type="submit" name="submit" value="Login">
                <a href="Forgot_Password.php">Forgot Password?</a>
                <a href="Home_Page.html">Home page</a>
            </fieldset>
        </form>


    </div>
</body>

</html>