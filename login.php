<?php
/**
 * Login Page - User authentication form
 */
session_start();

// Redirect if already logged in
if(isset($_SESSION['user_email'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/reset.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <header>
        <h1>Blog Login</h1>
        <p>Please enter your email address and password</p>
    </header>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php#about">About Me</a></li>
            <li><a href="education.php">Education</a></li>
            <li><a href="skills.php">Skills</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="viewBlog.php">Blog</a></li>
        </ul>
    </nav>

    <main class="form-wrapper login-form">
        <article>
            <section>
                <h2>Login</h2>
                
                <!-- Display error message if login failed -->
                <?php if(isset($_GET['error'])): ?>
                    <div style="background-color: #f8d7da; color: #721c24; padding: 1rem; margin-bottom: 1rem; border-radius: 0.7rem;">
                        <strong>Login Failed!</strong> Invalid email or password.
                    </div>
                <?php endif; ?>

                <form action="loginProcess.php" method="post">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>

                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required minlength="8">

                    <div class="form-buttons">
                        <input type="submit" value="Login">
                    </div>
                </form>

                <p style="margin-top: 1rem; color: #3c5a78;">
                    <strong>Demo Credentials:</strong><br>
                    Email: admin@example.com<br>
                    Password: password123
                </p>
            </section>
        </article>
    </main>

    <footer>
        <p>&copy; 2026 Svitlana Zubar. All rights reserved.</p>
    </footer>
</body>
</html>
