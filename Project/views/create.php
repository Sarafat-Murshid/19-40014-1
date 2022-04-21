<?php include "Navbar2.php"?>
<?php require_once "../controller/inventory.php"?>
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
<h4>Create Inventory:</h4>
            <label for="room_no">Room Number:</label>
            <input class ="form-input-material" type="Number" name="room_no" id="room_no" maxlength="5" >
            <span class="error"> <?php echo $err_room_no ?></span>
            
            <br><br>

            <label for="annex">Annex:</label>
            <input class ="form-input-material" type="Number" name="annex" id="annex" maxlength="5" >
            <span class="error"> <?php echo $err_annex ?></span>
            
            <br><br>

            <label for="chair">Chair:</label>
            <input class ="form-input-material" type="Number" name="chair" id="chair" maxlength="5" >
            <span class="error"> <?php echo $err_chair ?></span>
             
            <br><br>

            <label for="tables">Table:</label>
            <input class ="form-input-material" type="Number" name="tables" id="tables" maxlength="5" >
            <span class="error"> <?php echo $err_tables ?></span>
             
             
            <br><br>

            <label for="computer">Computers:</label>
            <input class ="form-input-material" type="Number" name="computer" id="computer" maxlength="5" >
            <span class="error"> <?php echo $err_computer ?></span>
            <br><br>

            <input type="submit" name="create" value="Create">
        </form>
</body>
</html>