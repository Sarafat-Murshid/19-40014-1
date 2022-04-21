<?php
require __DIR__ . '../../controller/users/users2.php';

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
            <h3>View Student: <b><?php echo $user['name'] ?></b></h3>
        </div>
        <div class="card-body">
            <a class="btn btn-secondary" href="update2.php?id=<?php echo $user['id'] ?>">Update</a>
            <form style="display: inline-block" method="POST" action="delete2.php">
                <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                <button class="btn btn-danger">Delete</button>
            </form>
        </div>
        <table class="table">
            <tbody>
            <tr>
                <th>Name:</th>
                <td><?php echo $user['name'] ?></td>
            </tr>
            <tr>
                <th>Username:</th>
                <td><?php echo $user['username'] ?></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><?php echo $user['email'] ?></td>
            </tr>
            <tr>
                <th>Phone:</th>
                <td><?php echo $user['phone'] ?></td>
            </tr>
            <tr>
                <th>Website:</th>
                <td>
                    <a target="_blank" href="http://<?php echo $user['website'] ?>">
                        <?php echo $user['website'] ?>
                    </a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>



