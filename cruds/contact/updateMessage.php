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
    <script src="../../js/update.js" defer></script>
</head>


<body>

    <form id="updateMessageForm" action="updateMessage.inc.php" method="POST">
        <input type="hidden" name="id" value="<?= $message['id'] ?>">

        <label>Name:</label>
        <input type="text" name="name" value="<?= htmlspecialchars($message['name']) ?>">
        <span class="nameError error"></span>

        <label>Phone:</label>
        <input type="text" name="phone" value="<?= htmlspecialchars($message['phone']) ?>">
        <span class="phoneError error"></span>

        <label>Email:</label>
        <input type="email" name="email" value="<?= htmlspecialchars($message['email']) ?>">
        <span class="emailError error"></span>

        <label>Message:</label>
        <textarea name="message"><?= htmlspecialchars($message['message']) ?></textarea>
        <span class="messageError error"></span>

        <button type="submit" name="update">Update</button>
    </form>


</body>

</html>