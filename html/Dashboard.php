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


$userCrud = new UserCrud();
$users = $userCrud->readUsers();

$productCrud=new productCrud();
$posts=$productCrud->readAllProducts();


include_once '../includes/header.php';



?>



<head>
   <link rel="stylesheet" href="../css/dashboard.css">
</head>
   <main>


   
<h1 class="dashboard-title">USERS DASHBOARD</h1>

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

<br>
<br>


<div class="product">
<div class="table">
    
<table class="post-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>price</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        <!-- ONE ROW ONLY -->
        <?php foreach($posts as $p): ?>

           <tr>
            <td><?= $p['id'] ?></td>
            <td><?= $p['title'] ?></td>
            <td><?= $p['description'] ?></td>
            <td><?= $p['price'] ?></td>
          
           
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


<div class="CreateForm">

<form action="../cruds/product/createForm.inc.php" method="POST" enctype="multipart/form-data">
     <div class="title">
        <h3>CREATE/ADD A PRODUCT</h3>
     </div>
    <div class="formField">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" placeholder="Title">
        <span class="error" id="TitleError"></span>
    </div>

    <div class="formField">
        <label for="description">Description:</label>
        <textarea type="text" id="description" name="description" placeholder="Description"></textarea>
        <span class="error" id="DescriptionError"></span>
    </div>

    <div class="formField">
        <label for="price">Price:</label>
        <input type="text" id="price" name="price" placeholder="Price">
        <span class="error" id="PriceError"></span>
    </div>

    <div class="formField">
        <label for="img">Image:</label>
        <input type="file" id="img" name="img" class="fileInput">
        <span class="error" id="ImageError"></span>
    </div>
    <button type='submit' name='submit' class='submit'>SUBMIT</button>

</form>

</div>

</div>




<br>
<br>

   </main>



<?php

include_once '../includes/footer.php';
?>