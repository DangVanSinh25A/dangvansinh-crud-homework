<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $id = $_GET['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $image_url = $_POST['image_url'];


    $user = array(
        "id" => $id,
        "name" => $name,
        "age" => $age,
        "email" => $email,
        "profile" => $image_url
    );

    updateStudent($user);

    if (isset($_POST['submit'])) {
        header("Location: index.php");
        exit();
    }
}
