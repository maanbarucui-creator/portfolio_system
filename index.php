<?php
require_once "db.php";

$projects = $conn->query("SELECT * FROM projects ORDER BY created_at DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="navbar">
    <div class="container nav-inner">
        <a href="index.php" class="logo">My Portfolio</a>
        <nav>
            <a href="#about">About</a>
            <a href="#projects">Projects</a>
            <a href="#contact">Contact</a>
            <a href="login.php" class="admin-link">Admin</a>
        </nav>
    </div>
</header>

<main>
<section class="hero">
    <div class="container hero-content">
        <div>
            <p class="eyebrow">STUDENT PORTFOLIO</p>
            <h1>Hello, I'm <span>Baruc, Marc Noel</span></h1>
            <p class="hero-text">
                Welcome to my portfolio. This website showcases my projects,
                skills, and work using PHP and MySQL.
            </p>
            <a href="#projects" class="button">View My Projects</a>
        </div>
    </div>
</section>

<section id="about" class="section">
    <div class="container">
        <h2>About Me</h2>
        <p class="section-text">
            I am a student learning web development, PHP, MySQL, database
            management, and server-side programming. This portfolio is a
            dynamic PHP/MySQL project where projects and contact messages
            are managed through an administrator dashboard.
        </p>
    </div>
</section>

<section id="projects" class="section section-alt">
    <div class="container">
        <h2>My Projects</h2>
        <p class="section-text">Here are my latest projects.</p>

        <div class="project-grid">
        <?php if ($projects && $projects->num_rows > 0): ?>
            <?php while ($project = $projects->fetch_assoc()): ?>
                <article class="project-card">
                    <div class="project-number">PROJECT</div>
                    <h3><?= htmlspecialchars($project["title"]) ?></h3>
                    <p><?= nl2br(htmlspecialchars($project["description"])) ?></p>
                    <?php if (!empty($project["technologies"])): ?>
                        <div class="tags">
                            <?php foreach (explode(",", $project["technologies"]) as $tech): ?>
                                <span><?= htmlspecialchars(trim($tech)) ?></span>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($project["project_link"])): ?>
                        <a class="project-link" href="<?= htmlspecialchars($project["project_link"]) ?>" target="_blank" rel="noopener">View Project →</a>
                    <?php endif; ?>
                </article>
            <?php endwhile; ?>
        <?php else: ?>
            <p>No projects have been added yet.</p>
        <?php endif; ?>
        </div>
    </div>
</section>

<section id="contact" class="section">
    <div class="container contact-grid">
        <div>
            <h2>Contact Me</h2>
            <p class="section-text">
                Have a question or want to get in touch? Send me a message.
            </p>
        </div>

        <form class="contact-form" action="send_message.php" method="POST">
            <label for="name">Name</label>
            <input id="name" name="name" type="text" required>

            <label for="email">Email</label>
            <input id="email" name="email" type="email" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" rows="6" required></textarea>

            <button class="button" type="submit">Send Message</button>
        </form>
    </div>
</section>
</main>

<footer>
    <div class="container">
        <p>© <?= date("Y") ?> Your Name. All rights reserved.</p>
    </div>
</footer>
</body>
</html>
