<?php
require __DIR__ . '../../controller/users/users1.php';


if (!isset($_POST['id'])) {
    echo "not_found";
    exit;
}
$userId = $_POST['id'];
deleteUser($userId);

header("Location: employee.php");
