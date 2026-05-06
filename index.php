<?php
/**
 * Updated Homepage - Now in PHP for session support
 */
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="CSS/reset.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <header>
        <h1>Svitlana Zubar</h1>
        <p>Computer Science Student | Queen Mary University of London</p>
    </header>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#about">About Me</a></li>
            <li><a href="education.php">Education</a></li>
            <li><a href="skills.php">Skills</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="viewBlog.php">Blog</a></li>
            <?php if(isset($_SESSION['user_email'])): ?>
                <li><a href="logout.php">Logout</a></li>
            <?php else: ?>
                <li><a href="login.php">Login</a></li>
            <?php endif; ?>
        </ul>
    </nav>

    <main class="main-layout">
        <article>
            <section id="about">
                <h2>About Me</h2>
                <p>
                    Hello! My name is Svitlana Zubar, and I am studying
                    Computer Science at Queen Mary University of London.
                </p>

                <p>
                    I am particularly interested in cybersecurity. Through
                    my studies, I have developed a strong foundation in
                    programming, algorithms, and data structures.
                </p>

                <p>
                    I enjoy learning new technologies and continuously
                    improving my problem-solving and programming skills.
                </p>
            </section>

            <figure>
                <img id="my-photo" src="photos/me.JPG" alt="My photo">
                <figcaption>
                    Photo of me, Svitlana Zubar.
                </figcaption>
            </figure>

            <section>
                <h2>Experience</h2>
                <h3>Queen Mary School of Electronic Engineering and Computer Science</h3>
                <p>
                    <strong>Course Representative</strong> - Oct 2025 - Present.
                </p>
                <p>
                    Skills: Communication, Leadership, Problem Solving, Collaboration, Advocacy.
                </p>
            </section>

            <section>
                <h2>Contact Me</h2>
                <p>Email: <a href="mailto:svitlana.zubar25@gmail.com">svitlana.zubar25@gmail.com</a></p>
                <p>LinkedIn: <a href="https://www.linkedin.com/in/svitlana-zubar-841305291?utm_source=share_via&utm_content=profile&utm_medium=member_ios">Svitlana Zubar</a></p>
                <p>GitHub: <a href="https://github.com/Svitlana-Zubar/lana-zubar">lana-zubar</a></p>
                <p>Location: London, United Kingdom</p>
            </section>

        </article>

        <aside>
            <h2>Quick Links</h2>
            <ul>
                <li><a href="skills.php">View my skills</a></li>
                <li><a href="portfolio.php">See my projects</a></li>
                <li><a href="education.php">Education background</a></li>
                <li><a href="viewBlog.php">Read my blog</a></li>
            </ul>
            <br>
            <?php if(isset($_SESSION['user_email'])): ?>
                <p><a href="addEntry.php"><strong>Create</strong> a new blog post</a></p>
                <p><strong>Welcome, <?php echo htmlspecialchars($_SESSION['user_email']); ?>!</strong></p>
            <?php else: ?>
                <p><a href="login.php"><strong>Login</strong> to add blog entries</a></p>
            <?php endif; ?>
        </aside>
    </main>

    <footer>
        <p>&copy; 2026 Svitlana Zubar. All rights reserved. </p>
    </footer>
</body>
</html>
