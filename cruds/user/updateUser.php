<?php
include_once 'UserCrud.php';

$id = $_GET['id'];

$userCrud = new UserCrud();
$user = $userCrud->getUserById($id);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Update User</title>

   <link rel="stylesheet" href="../../css/update.css">
   <script src="../../js/update.js" defer></script>

</head>

<body>


    <form  id="updateUser" action="updateuser.inc.php" method="POST">


        <h2>Update User</h2>
        <input type="hidden" name="id" value="<?= $user['id'] ?>">

        <label>Name:</label>
        <input type="text" name="name"  value="<?= htmlspecialchars($user['name']) ?>">
        <div class="nameError" aria-live="polite"  ></div>

        <label>Email:</label>
        <input type="email" name="email"  value="<?= htmlspecialchars($user['email']) ?>">
        <div class="emailError" aria-live="polite" ></div>

        <button type="submit" name="update">Update</button>
    </form>

</body>

</html>