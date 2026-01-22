<?php
 
function validateImage($file)
{
    $errors = [];

    if ($file['error'] === UPLOAD_ERR_NO_FILE) {
        $errors[] = "Image is required";
        return $errors;
    }

    if ($file['error'] !== UPLOAD_ERR_OK) {
        $errors[] = "Upload error occurred";
        return $errors;
    }

    if ($file['size'] > 2 * 1024 * 1024) {
        $errors[] = "Image must be less than 2MB";
    }

    $allowedExt = ['jpg', 'jpeg', 'png'];
    $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

    if (!in_array($ext, $allowedExt)) {
        $errors[] = "Invalid image format (jpg, jpeg, png only)";
    }

    return $errors;
}



?>