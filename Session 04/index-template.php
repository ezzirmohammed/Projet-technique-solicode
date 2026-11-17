<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mohammed Ezzir | Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <nav>
            <a href="#accueil" class="logo">EZZIR MOHAMMED</a>

            <ul>
                <li><a href="#accueil">Accueil</a></li>
                <li><a href="#apropos">À propos</a></li>
                <li><a href="#competences">Compétences</a></li>
                <li><a href="#projets">Projets</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>

        <section id="accueil">

            <p class="bienvenue">BIENVENUE SUR MON PORTFOLIO</p>

            <h1>Mohammed Ezzir.</h1>

            <h2>Développeur web en formation</h2>

            <p>
                Je découvre le monde du développement web et j'apprends
                à créer des expériences numériques.
            </p>

            <a href="#projets">Découvrir mes projets</a>

        </section>

        <section id="apropos">

            <h2>À propos</h2>

            <p>
                Je suis étudiant en développement web à Solicode.
                Je m'intéresse à la création de sites web et à
                l'univers du numérique.
            </p>

        </section>

        <section id="competences">

            <h2>Mes compétences</h2>

            <div class="competences-container">

                <article class="competence-card">

                    <img
                        src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg"
                        alt="Logo HTML5">

                    <div>
                        <h3>HTML5</h3>
                        <p>Structure et organisation des pages web.</p>
                    </div>

                </article>

                <article class="competence-card">

                    <img
                        src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg"
                        alt="Logo CSS3">

                    <div>
                        <h3>CSS3</h3>
                        <p>Mise en forme et design des interfaces web.</p>
                    </div>

                </article>

            </div>

        </section>

        <section id="projets">

            <h2>Mes projets</h2>

            <div class="projets-container">

                <?php foreach ($projets as $projet) { ?>

                    <article class="projet-card">

                        <h3>
                            <?= htmlspecialchars($projet['titre']) ?>
                        </h3>

                        <p>
                            <?= htmlspecialchars($projet['description']) ?>
                        </p>

                        <p class="technologies">
                            Technologies :
                            <?= htmlspecialchars($projet['technologies']) ?>
                        </p>

                        <?php if ($projet['statut'] == 'Terminé') { ?>

                            <p class="statut termine">
                                Projet terminé
                            </p>

                        <?php } else { ?>

                            <p class="statut en-cours">
                                Projet en cours
                            </p>

                        <?php } ?>

                    </article>

                <?php } ?>

            </div>

        </section>

        <section id="contact">

            <h2>Me contacter</h2>

            <p>Vous avez une question ou un projet ?</p>

            <div class="liens-contact">

                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=ezzirmohammed1@gmail.com">
                    Mon adresse e-mail
                </a>

                <a href="https://github.com/ezzirmohammed" target="_blank">
                    Mon GitHub
                </a>

            </div>

        </section>

    </main>

    <footer>

        <p>© 2026 Mohammed Ezzir. Tous droits réservés.</p>

    </footer>

</body>
</html>
