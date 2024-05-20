<?php include "Navbar2.php"?>
<?php require_once "../controller/event.php"?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Event</title>
    <link rel="stylesheet" type="text/css" href="./create.css">
</head>
<body>
<form class="login-form" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" novalidate>
<h4>Create Event:</h4>
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