<?php
session_start();
session_unset();
session_destroy();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Logout</title>
	<style>
        body{
          display: flex;
          justify-content: flex-start;
          min-height: 100vh;
          width: 100%;
          background-image: linear-gradient(rgba(4, 9, 30, 0.7),rgba(4, 9, 30, 0.7)),url(../views/background.jpg);
          background-position: center;
          background-size: cover;
          position: relative; 
          font-family: sans-serif;
          color: whitesmoke;
          flex-direction: column;
        }

        .button-30 {
          align-items: center;
          appearance: none;
          background-color: #FCFCFD;
          border-radius: 4px;
          border-width: 0;
          box-shadow: rgba(45, 35, 66, 0.4) 0 2px 4px,rgba(45, 35, 66, 0.3) 0 7px 13px -3px,#D6D6E7 0 -3px 0 inset;
          box-sizing: border-box;
          color: #36395A;
          cursor: pointer;
          display: inline-flex;
          font-family: "JetBrains Mono",monospace;
          height: 48px;
          justify-content: center;
          line-height: 1;
          list-style: none;
          overflow: hidden;
          padding-left: 16px;
          padding-right: 16px;
          position: relative;
          text-align: left;
          text-decoration: none;
          transition: box-shadow .15s,transform .15s;
          user-select: none;
          -webkit-user-select: none;
          touch-action: manipulation;
          white-space: nowrap;
          will-change: box-shadow,transform;
          font-size: 18px;
        }

        .button-30:focus {
          box-shadow: #D6D6E7 0 0 0 1.5px inset, rgba(45, 35, 66, 0.4) 0 2px 4px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
        }

        .button-30:hover {
          box-shadow: rgba(45, 35, 66, 0.4) 0 4px 8px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
          transform: translateY(-2px);
        }

        .button-30:active {
          box-shadow: #D6D6E7 0 3px 7px inset;
          transform: translateY(2px);
}
</style>
</head>
<body>
	<div align="center">
		<a class= "button-30" href="../views/Login.php">Login</a>
	</div>
</body>
</html>