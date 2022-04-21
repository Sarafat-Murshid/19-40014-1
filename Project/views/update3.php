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
    $event_name= $_POST['event_name'];
    $event_date= $_POST['event_date']; 
    
    if(empty($event_name) || empty($event_date)) {
                
        if(empty($event_name)) {
            echo "<font color='red'>Name  field is empty.</font><br/>";
        }
        
        if(empty($event_date)) {
            echo "<font color='red'>Username field is empty.</font><br/>";
        }
           
    } else {    
        $result = mysqli_query($mysqli, "UPDATE event SET event_name='$event_name', event_date='$event_date' WHERE id=$id");
        
        
        header("Location: event.php");
    }
}
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM event WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
    $event_name= $res['event_name'];
    $event_date= $res['event_date']; 
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
                <td>Event Name:</td>
                <td><input type="text" name="event_name" value="<?php echo $event_name;?>"></td>
            </tr>
            <tr> 
                <td>Event Date:</td>
                <td><input type="date" name="event_date" value="<?php echo $event_date;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>

