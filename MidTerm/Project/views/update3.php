<?php
require __DIR__ . '../../controller/users/users3.php';

if (!isset($_GET['id'])) {
    echo "not_found";
    exit;
}
$userId = $_GET['id'];

$user = getUserById($userId);
if (!$user) {
    echo "not_found";
    exit;
}

$errors = [
    'name' => "",
    'username' => "",
    'email' => "",
    'phone' => "",
    'website' => "",
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = array_merge($user, $_POST);

    $isValid = validateUser($user, $errors);

    if ($isValid) {
        $user = updateUser($_POST, $userId);
        header("Location: event.php");
    }
}

?>

<?php include '_form3.php' ?>
