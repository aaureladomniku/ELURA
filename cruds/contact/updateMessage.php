<?php
include_once 'ContactCrud.php';

$id = $_GET['id'];

$contactCrud = new ContactCrud();
$message = $contactCrud->getMessageById($id);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Update Message</title>
    <link rel="stylesheet" href="../../css/update.css">
</head>


<body>

    <form action="updateMessage.inc.php" method="POST">

        <h2>Update Message</h2>
       

        <input type="hidden" name="id" value="<?= $message['id'] ?>">

        <label>Name:</label>
        <input type="text" name="name" value="<?= htmlspecialchars($message['name']) ?>">

        <label>Phone:</label>
        <input type="text" name="phone" value="<?= htmlspecialchars($message['phone']) ?>">

        <label>Email:</label>
        <input type="email" name="email" value="<?= htmlspecialchars($message['email']) ?>">

        <label>Message:</label>
        <textarea name="message"><?= htmlspecialchars($message['message']) ?></textarea>

        <button type="submit" name="update">Update</button>
    </form>

</body>

</html>