
<?php


include_once 'productCrud.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/dashboard.css">
    <script src="../../js/update.js"></script>
</head>
<body>
    
</body>
</html>
<button id="btn"><a href="../../html/Dashboard.php">BACK TO DASHBOARD</a></button>

    <div class="CreateForm">

        <form action="createForm.inc.php" id="post" method="POST" enctype="multipart/form-data">
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
