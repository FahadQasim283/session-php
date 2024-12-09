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
    <title>Profile</title>
</head>
<body>
    <h1>Your Profile</h1>
    <p>Username: <?php echo htmlspecialchars($_SESSION["username"]); ?></p>
    <a href="dashboard.php">Back to Dashboard</a><br>
    <a href="logout.php">Logout</a>
</body>
</html>
