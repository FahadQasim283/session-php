<?php
// Start the session
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome to Your Dashboard</h1>
    <p>Hello, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</p>
    <a href="profile.php">View Profile</a><br>
    <a href="logout.php">Logout</a>
</body>
</html>
