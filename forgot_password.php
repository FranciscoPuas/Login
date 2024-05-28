<?php // forgot_password.php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h2>Forgot Password</h2>
    <form action="reset_password.php" method="post">
        <input type="email" name="email" placeholder="Email" required>
        <button type="submit">Reset Password</button>
    </form>
</body>

</html>