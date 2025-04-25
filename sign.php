<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charity</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>
    <?php
        require_once "blocks/header.html";
    ?>
    <main>
        <form class="sign_in" action="" method="POST">
            <h2 class="form-title">Sign in</h2>
            <h2>Email</h2>
            <input type="email" name="email" placeholder="Enter...">
            <h2>Password</h2>
            <input type="password" name="password" placeholder="Enter...">
            <input type="submit" value="Confirm">
        </form>
    </main>
</body>
</html>