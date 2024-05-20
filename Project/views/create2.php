<?php include "Navbar2.php"?>
<?php require_once "../controller/student.php"?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Student</title>
    <link rel="stylesheet" type="text/css" href="./create.css">
</head>
<body>
<form class="login-form" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" novalidate>
<h4>Create Student:</h4>
            <label for="name">Name:</label>
            <input class ="form-input-material" type="text" name="name" id="name">
            <span class="error"> <?php echo $err_name ?></span>
            
            <br><br>

            <label for="username">Username:</label>
            <input class ="form-input-material" type="text" name="username" id="username">
            <span class="error"> <?php echo $err_username ?></span>
            
            <br><br>

            <label for="email">Email:</label>
            <input class ="form-input-material" type="email" name="email" id="email">
            <span class="error"> <?php echo $err_email ?></span>
             
            <br><br>

            <label for="phone">Phone:</label>
            <input class ="form-input-material" type="Number" name="phone" id="phone">
            <span class="error"> <?php echo $err_phone ?></span>
             
             
            <br><br>

            <label for="url">Website:</label>
            <input class ="form-input-material" type="url" name="url" id="url">
            <span class="error"> <?php echo $err_url ?></span>
            <br><br>

            <input type="submit" name="create" value="Create">
        </form>
</body>
</html>