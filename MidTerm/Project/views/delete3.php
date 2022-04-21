<?php
require __DIR__ . '../../controller/users/users3.php';


if (!isset($_POST['id'])) {
    echo "not_found";
    exit;
}
$userId = $_POST['id'];
deleteUser($userId);

header("Location: event.php");
