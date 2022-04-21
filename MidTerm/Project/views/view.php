<?php
require __DIR__ . '../../controller/users/users.php';

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
            <h3>View Inventory:</h3>
        </div>
        <div class="card-body">
            <a class="btn btn-secondary" href="update.php?id=<?php echo $user['id'] ?>">Update</a>
            <form style="display: inline-block" method="POST" action="delete.php">
                <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                <button class="btn btn-danger">Delete</button>
            </form>
        </div>
        <table class="table">
            <tbody>
            <tr>
                <th>Room Number:</th>
                <td><?php echo $user['name'] ?></td>
            </tr>
            <tr>
                <th>Annex Number:</th>
                <td><?php echo $user['username'] ?></td>
            </tr>
            <tr>
                <th>Table:</th>
                <td><?php echo $user['email'] ?></td>
            </tr>
            <tr>
                <th>Chair:</th>
                <td><?php echo $user['phone'] ?></td>
            </tr>
            <tr>
                <th>Computer:</th>
                <td>
                    <?php echo $user['website'] ?>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>



