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
        <form class="sign_up" action="php/sign_up.php" method="POST">
            <h2 class="form-title">Sign up</h2>
            <h2>First name</h2>
            <input type="text" name="first_name" placeholder="Enter...">
            <h2>Last name</h2>
            <input type="text" name="last_name" placeholder="Enter...">
            <h2>Birthdate</h2>
            <input type="text" name="birthdate" placeholder="Year.Month.Day">
            <h2>Email</h2>
            <input type="email" name="email" placeholder="Enter...">
            <h2>Password</h2>
            <input type="password" name="password" placeholder="Enter...">
            <h2>Repeat password</h2>
            <input type="password" name="confirm_password" placeholder="Enter...">
            <h2>Role</h2>
            <select name="role">
                <option value="vo">Volunteer</option>
                <option value="do">Donor</option>
            </select>
            <input type="submit" value="Confirm">
        </form>
        <button class="changeFormBtn" onclick="changeForm()">Create account</button>
    </main>

    <script src="js/script.js"></script>
</body>
</html>