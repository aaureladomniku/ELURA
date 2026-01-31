

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ELURA</title>
     <link rel="stylesheet" href="../css/dashboard.css">
    <script src="../js/update.js" defer></script>
   <link rel="stylesheet" href="../css/navAndFooter.css">
   <link rel="stylesheet" href="../css/darkMode.css">
   <script src="../js/burgermenu.js" defer></script>
   
  
</head>


<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user_id'])) {
    header("Location: log-in.php");
    exit();
}


if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
    header("Location: Home.php");
    exit();
}


include_once '../cruds/product/productCrud.php';
include_once '../cruds/user/UserCrud.php';
require_once '../cruds/product/product.php';
include_once '../cruds/contact/ContactCrud.php';


$userCrud = new UserCrud();
$users = $userCrud->readUsers();

$productCrud = new productCrud();
$posts = $productCrud->readAllProducts();

$contactCrud = new ContactCrud();
$messages = $contactCrud->readMessages();


include_once '../includes/header.php';



?>




<main>



    <h1 class="dashboard-title">USERS DASHBOARD</h1>
    <div class="table-wrapper">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>

            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= $user['id'] ?></td>
                        <td><?= htmlspecialchars($user['name']) ?></td>
                        <td><?= htmlspecialchars($user['email']) ?></td>
                        <td><?= htmlspecialchars($user['created_at']) ?></td>
                        <td class="actions">
                            <a href="../cruds/user/updateUser.php?id=<?= $user['id'] ?>" class="btn update">
                                Update
                            </a>

                            <form action="../cruds/user/deleteUser.inc.php" method="POST">
                                <input type="hidden" name="id" value="<?= $user['id'] ?>">
                                <button type="submit" name="delete" class="btn delete"
                                    onclick="return confirm('Delete this user?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>


        </table>
    </div>



    <h1 class="dashboard-title">PRODUCT DASHBOARD</h1>
    <div class="product">
        <div class="table-wrapper">
            <div class="table">

                <table class="post-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Updated</th>
                            <th>Actions</th>
                            <th class="createBtn"><a href="../cruds/product/createProduct.php">ADD PRODUCT</a></th>
                        </tr>
                    </thead>

                    <tbody>
                        <!-- ONE ROW ONLY -->
                        <?php foreach ($posts as $p): ?>

                            <tr>
                                <td><?= $p['id'] ?></td>
                                <td><?= $p['title'] ?></td>
                                <td><?= $p['description'] ?></td>
                                <td><?= $p['price'] ?></td>
                                <td><?= htmlspecialchars($p['updated_by_name'] ?? 'not updated') ?></td>


                                <td class="actions">
                                    <a href="../cruds/product/updateProductForm.php?id=<?= $p['id'] ?>" class="btn update">
                                        Update
                                    </a>


                                    <form action="../cruds/product/deletePost.inc.php" method="POST">
                                        <input type="hidden" name="id" value="<?= $p['id'] ?>">
                                        <button type="submit" name="delete" class="btn delete"
                                            onclick="return confirm('Delete this user?')">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>




    </div>




    <h1 class="dashboard-title">MESSAGES DASHBOARD</h1>
    <div class="table-wrapper">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($messages as $m): ?>
                    <tr>
                        <td><?= htmlspecialchars($m['user_name'] ?? $m['visitor_name']) ?></td>
                        <td><?= htmlspecialchars($m['phone']) ?></td>
                        <td><?= htmlspecialchars($m['user_email'] ?? $m['visitor_email']) ?></td>
                        <td><?= htmlspecialchars($m['message']) ?></td>
                        <td><?= htmlspecialchars($m['created_at']) ?></td>

                        <td class="actions">
                            <a href="../cruds/contact/updateMessage.php?id=<?= $m['id'] ?>" class="btn update">Update</a>
                            <form action="../cruds/contact/deleteContact.inc.php" method="POST">
                                <input type="hidden" name="id" value="<?= $m['id'] ?>">
                                <button type="submit" name="delete" class="btn delete"
                                    onclick="return confirm('Delete this message?')">Delete</button>
                            </form>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>


    </div>




</main>



<?php

include_once '../includes/footer.php';
?>