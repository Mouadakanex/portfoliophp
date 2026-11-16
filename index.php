
<?php

require_once "data/portfolio.php";

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mon Portfolio</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header>
        <h1>Mon Portfolio</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="#projects">Mes Projets</a>
            <a href="#about">À propos</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <main>

        <section class="hero">
            <h2>Bienvenue sur mon Portfolio</h2>
            <p>Je suis développeur web passionné.</p>
        </section>

        <section id="projects">

            <h2>Mes Projets</h2>

            <p>
                Nombre total de projets :
                <?= $totalProjects ?>
            </p>

            <div class="projects-container">

                <?php foreach ($projects as $project): ?>

                    <article class="project-card">

                        <img
                            src="<?= htmlspecialchars($project["image"]) ?>"
                            alt="<?= htmlspecialchars($project["title"]) ?>"
                        >

                        <h3>
                            <?= htmlspecialchars($project["title"]) ?>
                        </h3>

                        <p>
                            <?= htmlspecialchars($project["description"]) ?>
                        </p>

                        <span>
                            <?= htmlspecialchars($project["category"]) ?>
                        </span>

                        <?php if ($project["status"] === "completed"): ?>

                            <p class="completed">
                                Projet terminé
                            </p>

                        <?php else: ?>

                            <p class="in-progress">
                                En cours
                            </p>

                        <?php endif; ?>

                    </article>

                <?php endforeach; ?>

            </div>

        </section>

    </main>

    <footer>
        <p>© 2026 Mon Portfolio</p>
    </footer>

</body>
</html>
