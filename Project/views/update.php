<?php session_start(); ?>
<?php include "Navbar2.php"?>
<?php
if (!isset($_SESSION['username'])) {
        header("Location:Login.php");
    }
?>

<?php
// including the database connection file
include_once("../model/connection.php");

if(isset($_POST['update']))
{   
    $id = $_POST['id'];
    $room_no= $_POST['room_no'];
    $annex= $_POST['annex'];
    $chair= $_POST['chair'];
    $tables= $_POST['tables'];
    $computer= $_POST['computer'];  
    
    if(empty($room_no) || empty($annex) || empty($chair) || empty($tables) || empty($computer)) {
                
        if(empty($room_no)) {
            echo "<font color='red'>Room Number field is empty.</font><br/>";
        }
        
        if(empty($annex)) {
            echo "<font color='red'>Annex field is empty.</font><br/>";
        }
        
        if(empty($chair)) {
            echo "<font color='red'>Chair field is empty.</font><br/>";
        }   
        if(empty($tables)) {
            echo "<font color='red'>Table field is empty.</font><br/>";
        } 
        if(empty($computer)) {
            echo "<font color='red'>Computer field is empty.</font><br/>";
        }     
    } else {    
        $result = mysqli_query($mysqli, "UPDATE inventory SET room_no='$room_no', annex='$annex', chair='$chair', tables='$tables', computer='$computer' WHERE id=$id");
        
        
        header("Location: accounts.php");
    }
}
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM inventory WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
    $room_no= $res['room_no'];
    $annex= $res['annex'];
    $chair= $res['chair'];
    $tables= $res['tables'];
    $computer= $res['computer'];  
}
?>
<html>
<head>  
    <title>Edit Data</title>
</head>

<body>
    <br/><br/>
    
    <form class="login-form" name="form1" method="post" action="">
        <table align="center" border="0">
            <tr> 
                <td>Room Number:</td>
                <td><input type="text" name="room_no" value="<?php echo $room_no;?>"></td>
            </tr>
            <tr> 
                <td>Annex:</td>
                <td><input type="text" name="annex" value="<?php echo $annex;?>"></td>
            </tr>
            <tr> 
                <td>Chair:</td>
                <td><input type="text" name="chair" value="<?php echo $chair;?>"></td>
            </tr>
             <tr> 
                <td>Table:</td>
                <td><input type="text" name="tables" value="<?php echo $tables;?>"></td>
            </tr>
             <tr> 
                <td>Computers:</td>
                <td><input type="text" name="computer" value="<?php echo $computer;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>

