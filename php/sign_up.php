<?php
    $conn = new mysqli("localhost", "root", "!AmanbayZhanetta2007", "charity", 3307);

    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $birthdate = $_POST["birthdate"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $role = $_POST["role"];

    if ($password == $confirm_password) {
        $sql = "INSERT INTO users(first_name, last_name, birth_date, email, user_password, user_role, registration_date) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
?>