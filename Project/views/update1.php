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
    $name= $_POST['name'];
    $username= $_POST['username'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $url= $_POST['url'];  
    
    if(empty($name) || empty($username) || empty($email) || empty($phone) || empty($url)) {
                
        if(empty($name)) {
            echo "<font color='red'>Name  field is empty.</font><br/>";
        }
        
        if(empty($username)) {
            echo "<font color='red'>Username field is empty.</font><br/>";
        }
        
        if(empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }   
        if(empty($phone)) {
            echo "<font color='red'>Phone field is empty.</font><br/>";
        } 
        if(empty($url)) {
            echo "<font color='red'>Website field is empty.</font><br/>";
        }     
    } else {    
        $result = mysqli_query($mysqli, "UPDATE employee SET name='$name', username='$username', email='$email', phone='$phone', url='$url' WHERE id=$id");
        
        
        header("Location: employee.php");
    }
}
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM employee WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
    $name= $res['name'];
    $username= $res['username'];
    $email= $res['email'];
    $phone= $res['phone'];
    $url= $res['url'];  
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
                <td>Name:</td>
                <td><input type="text" name="name" value="<?php echo $name;?>"></td>
            </tr>
            <tr> 
                <td>Username:</td>
                <td><input type="text" name="username" value="<?php echo $username;?>"></td>
            </tr>
            <tr> 
                <td>Email:</td>
                <td><input type="text" name="email" value="<?php echo $email;?>"></td>
            </tr>
             <tr> 
                <td>Phone:</td>
                <td><input type="text" name="phone" value="<?php echo $phone;?>"></td>
            </tr>
             <tr> 
                <td>Website:</td>
                <td><input type="text" name="url" value="<?php echo $url;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>

