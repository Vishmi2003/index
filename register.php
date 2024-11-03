<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - FitZone</title>
    <link rel="stylesheet" href="register.css"> <!-- Link to CSS -->
</head>
<body>
    <div class="container">
        <form action="register.php" method="POST">
            <h2>Register</h2>
            
            <label for="first name">First Name:</label>
            <input type="first name" id="first name" name="first name" required>

            <label for="last name">Last Name:</label>
            <input type="last  name" id="last  name" name="last  name" required>

            <label for="contact number">Contact Number:</label>
            <input type="contact number" id="contact number" name="contact number" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Register</button>

            <button onclick="history.back()">Go Back</button>
        </form>
    </div>
</body>
</html>
