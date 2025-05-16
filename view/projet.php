<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes projets</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            font-family: 'Arial', sans-serif;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 40px;
        }

        .project-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
        }

        .project-card {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
            text-align: center;
        }

        .project-card:hover {
            transform: translateY(-5px);
        }

        .project-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .project-content {
            padding: 20px;
        }

        .project-content h2 {
            margin: 10px 0;
            font-size: 20px;
        }

        .project-content p {
            font-size: 14px;
            color: #555;
        }
        .warning {
            background-color: #fff3cd;
            color: #856404;
            border: 1px solid #ffeeba;
            padding: 15px 20px;
            margin: 20px auto;
            border-radius: 5px;
            max-width: 800px;
            font-size: 16px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        .project-card-link {
            text-decoration: none;
            color: inherit;
            display: block;
        }

        .project-card {
            /* tes styles existants ici */
            cursor: pointer;
        }

    </style>
</head>
<body>
<?php include('header.php'); ?>
<div class="warning">
    ⚠️ Tous mes projets ne sont pas encore affichés. Ils seront ajoutés progressivement !
</div>
<div class="container">
    <h1>Mes projets</h1>
    <div class="project-grid">
        <!-- Projet : Modélisation 3D -->
        <a href="projets/cao.php" class="project-card-link">
            <div class="project-card">
                <img src="img/projets/CAO.webp" alt="Modélisation 3D">
                <div class="project-content">
                    <h2>Modélisation 3D</h2>
                    <p>Conception de pièces mécaniques et assemblages sur SolidWorks, Fusion 360 ou Catia.</p>
                </div>
            </div>
        </a>

        <a href="projets/simu.php" class="project-card-link">
            <div class="project-card">
                <img src="img/projets/simu.png" alt="simulation numérique">
                <div class="project-content">
                    <h2>Simulation numérique</h2>
                    <p>Études de contraintes, CFD et optimisation de performances par calculs éléments finis.</p>
                </div>
            </div>
        </a>

        <a href="projets/prog.php" class="project-card-link">
            <div class="project-card">
                <img src="img/projets/prog.jpg" alt="Programmation">
                <div class="project-content">
                    <h2>Programmation</h2>
                    <p>Développement en Java, Python, C++, création d'applications et scripts automatisés.</p>
                </div>
            </div>
        </a>

        <a href="projets/elec.php" class="project-card-link">
            <div class="project-card">
                <img src="img/projets/arduino.avif" alt="Projet Arduino">
                <div class="project-content">
                    <h2>Électronique embarquée</h2>
                    <p>Projets Arduino, capteurs, automatisation et interfaces homme-machine.</p>
                </div>
            </div>
        </a>

        <a href="projets/maison.php" class="project-card-link">
            <div class="project-card">
                <img src="/mvc/view/img/projets/maison/projet%20maison.png" alt="Design d'une maison">
                <div class="project-content">
                    <h2>Projet maison connectée </h2>
                    <p>Design de A à Z d'une maison connecté avec la réalisation de l'architecture, de l'arrivée de l'eau, la partie électrique.</p>
                </div>
            </div>
        </a>
        <a href="projets/autres_projets.php" class="project-card-link">
            <div class="project-card">
                <img src="/mvc/view/img/projets/extra_projet.png" alt="Design d'une maison">
                <div class="project-content">
                    <h2>Autres projets </h2>
                    <p>Autres projets extra-scolaire réalisés </p>
                </div>
            </div>
        </a>
    </div>
</body>
</html>
