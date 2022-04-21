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

?>
<?php include "Navbar2.php"?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>View Event: <b><?php echo $user['name'] ?></b></h3>
        </div>
        <div class="card-body">
            <a class="btn btn-secondary" href="update3.php?id=<?php echo $user['id'] ?>">Update</a>
            <form style="display: inline-block" method="POST" action="delete3.php">
                <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                <button class="btn btn-danger">Delete</button>
            </form>
        </div>
        <table class="table">
            <tbody>
            <tr>
                <th>Event Name:</th>
                <td><?php echo $user['name'] ?></td>
            </tr>
            <tr>
                <th>Date:</th>
                <td><?php echo $user['username'] ?></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
