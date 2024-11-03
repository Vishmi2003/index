<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - FitZone</title>
    <link rel="stylesheet" href="login.css"> <!-- Link to CSS -->
</head>
<body>
    <div class="container">
        <form action="register.php" method="POST">
            <h2>Login</h2>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>

    <button onclick="history.back()">Go Back</button>

        </form>
    </div>
</body>
</html>
