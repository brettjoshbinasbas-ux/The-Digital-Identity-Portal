<!DOCTYPE html>
<html>

<head>
    <title>Digital Identity Portal</title>
</head>

<body>

    <h2>Conference Registration</h2>

     
    <!-- method="POST" for submission, keeps data hidden from URL -->
    <!-- action="profile.php" sends data to profile page -->
    
    <form action="profile.php" method="POST">

        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>       <!-- must need name for form POST submission -->

        <label>Job Title:</label><br>
        <input type="text" name="jobtitle" required><br><br>

        <label>Favorite Programming Language:</label><br>
        <input type="text" name="language" required><br><br>

        <button type="submit">Create Profile</button>

    </form>

</body>

</html>