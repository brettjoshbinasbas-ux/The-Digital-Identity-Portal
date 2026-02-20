<?php
// Prevent direct access
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit();
}

// Securely grab values
$username = htmlspecialchars($_POST['username']);
$jobtitle = htmlspecialchars($_POST['jobtitle']);
$language = htmlspecialchars($_POST['language']);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Your Digital Profile</title>
</head>

<body>

    <h2>Profile Successfully Created!</h2>

    <p><strong>Username:</strong> <?php echo $username; ?></p>
    <p><strong>Job Title:</strong> <?php echo $jobtitle; ?></p>
    <p><strong>Favorite Language:</strong> <?php echo $language; ?></p>

    <br>
    <a href="index.php">Register Another Profile</a>

</body>

</html>