<?php
session_start();

if (isset($_SESSION["admin_id"])) {
    header("Location: admin/dashboard.php");
    exit;
}

$error = $_GET["error"] ?? "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="login-page">
<div class="login-box">
    <a href="index.php" class="back-link">← Back to Portfolio</a>
    <h1>Admin Login</h1>
    <p>Sign in to manage your portfolio.</p>

    <?php if ($error === "invalid"): ?>
        <div class="alert error">Invalid username or password.</div>
    <?php elseif ($error === "empty"): ?>
        <div class="alert error">Please fill in all fields.</div>
    <?php endif; ?>

    <form action="authenticate.php" method="POST">
        <label for="username">Username</label>
        <input id="username" name="username" type="text" required>

        <label for="password">Password</label>
        <input id="password" name="password" type="password" required>

        <button class="button full" type="submit">Login</button>
    </form>

    <p class="hint">Classroom account: admin / 12345</p>
</div>
</body>
</html>
