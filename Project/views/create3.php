<?php include "Navbar2.php"?>
<?php require_once "../controller/event.php"?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Inventory</title>
    <style>
        .login-form {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 50px 40px;
        color: white;
        background: rgba(0, 0, 0, 0.8);
        border-radius: 10px;
        box-shadow: 0 0.4px 0.4px rgba(128, 128, 128, 0.109),
        0 1px 1px rgba(128, 128, 128, 0.155),
        0 2.1px 2.1px rgba(128, 128, 128, 0.195),
        0 4.4px 4.4px rgba(128, 128, 128, 0.241),
        0 12px 12px rgba(128, 128, 128, 0.35);
    }
    </style>
</head>
<body>
<form class="login-form" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" novalidate>
<h4>Create Employee:</h4>
            <label for="event_name">Event Name:</label>
            <input class ="form-input-material" type="text" name="event_name" id="event_name">
            <span class="error"> <?php echo $err_ename ?></span>
            
            <br><br>

            <label for="event_date">Event Date:</label>
            <input class ="form-input-material" type="date" name="event_date" id="event_date">
            <span class="error"> <?php echo $err_edate ?></span>
            
            <br><br>

            <input type="submit" name="create" value="Create">
        </form>
</body>
</html>