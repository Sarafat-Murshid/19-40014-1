<?php
    session_start();
    include ("../model/dbconfig.php");
    $bgcolor="";

    if(isset($_COOKIE['bgcolor'])){
        $bgcolor = $_COOKIE['bgcolor'];
    }
    else{
        $bgcolor="#FFFFFF";
    }

    if (!isset($_SESSION['username'])) {
        header("Location:Login.php");
    }
    ?>
    
    <?php 
    $prof= $_SESSION["username"];
    $prof1 = getprofile($prof);
    function getprofile($prof){
        $query = "select * from user where username='$prof'";
        $rs = get($query);
        return $rs;
    }
?>