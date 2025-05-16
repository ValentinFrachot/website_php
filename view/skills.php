<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Compétences</title>
    <style>
        /* Global */
        body {
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            font-family: 'Arial', sans-serif;
            color: #333;
        }

        h1, h2, p {
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            margin-bottom: 30px; /* Espace entre le titre et les blocs */
        }

        .category {
            margin-bottom: 30px;
            cursor: pointer;
        }

        .category h2 {
            font-size: 1.5rem;
            color: #34495e;
            transition: color 0.3s ease;
        }

        .category h2:hover {
            color: #e74c3c;
        }

        .skills-list {
            display: none;
            padding-left: 20px;
            margin-top: 10px;
            list-style-type: disc;
        }

        .skills-list li {
            margin: 5px 0;
        }

        .skills-list.open {
            display: block;
        }

        /* Grid layout for categories */
        .categories-container {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
        }

        .category-block {
            flex: 1;
            min-width: 250px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .category-block h2 {
            font-size: 1.6rem;
        }

        /* Style for buttons of dropdown menus */
        .category {
            cursor: pointer;
        }

        /* Espace entre les sections de blocs */
        .categories-container + .categories-container {
            margin-top: 40px;
        }
    </style>
</head>
<body>
<?php include('header.php'); ?>
<!-- Header -->
<div class="container">
    <h1>Mes Compétences</h1>

    <div class="categories-container">
        <!-- Linguistique -->
        <div class="category-block">
            <div class="category">
                <h2 onclick="toggleSkills('linguistique')">Linguistique</h2>
                <ul id="linguistique" class="skills-list">
                    <li>Français : Langue maternelle</li>
                    <li>Anglais : Niveau B2 (TOEIC : 785)</li>
                    <li>Espagnol : Niveau B1</li>
                </ul>
            </div>
        </div>

        <!-- Informatique -->
        <div class="category-block">
            <div class="category">
                <h2 onclick="toggleSkills('informatique')">Informatique</h2>
                <ul id="informatique" class="skills-list">
                    <li>Gestion de bases de données (MySQL, PostgreSQL)</li>
                    <li>Gestion de version avec Git</li>
                    <li>Large Language Model</li>
                    <li>Réseaux de neurones (convolutifs, récurrents)</li>
                    <li>TensorFlow/PyTorch</li>
                    <li>Cloud Computing</li>
                    <li>Tests automatisés</li>
                </ul>
            </div>
        </div>

        <!-- Programmation -->
        <div class="category-block">
            <div class="category">
                <h2 onclick="toggleSkills('programmation')">Programmation</h2>
                <ul id="programmation" class="skills-list">
                    <li>Java</li>
                    <li>Python</li>
                    <li>JavaScript</li>
                    <li>PHP</li>
                    <li>HTML / CSS</li>
                    <li>SQL</li>
                    <li>C++</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="categories-container">
        <!-- Mécanique -->
        <div class="category-block">
            <div class="category">
                <h2 onclick="toggleSkills('mecanique')">Mécanique</h2>
                <ul id="mecanique" class="skills-list">
                    <li>Conception assistée par ordinateur (CAO)</li>
                    <li>Prototypage rapide</li>
                    <li>Analyse des contraintes et calculs mécaniques</li>
                    <li>Recherche et développement</li>
                </ul>
            </div>
        </div>

        <!-- Soft Skills -->
        <div class="category-block">
            <div class="category">
                <h2 onclick="toggleSkills('soft-skills')">Soft Skills</h2>
                <ul id="soft-skills" class="skills-list">
                    <li>Communication</li>
                    <li>Travail en équipe</li>
                    <li>Leadership</li>
                    <li>Gestion du temps</li>
                    <li>Prise d'initiatives</li>
                    <li>Autonomie</li>
                </ul>
            </div>
        </div>

        <!-- Outils numériques -->
        <div class="category-block">
            <div class="category">
                <h2 onclick="toggleSkills('Outils-numériques')">Outils numériques</h2>
                <ul id="Outils-numériques" class="skills-list">
                    <li>Ansys</li>
                    <li>SQL Workbench</li>
                    <li>JetBrains</li>
                    <li>Bitbucket/GitHub</li>
                    <li>Power BI</li>
                    <li>SolidWorks</li>
                    <li>AWS</li>
                </ul>
            </div>
        </div>
    </div>

</div>

<script>
    function toggleSkills(category) {
        var list = document.getElementById(category);
        list.classList.toggle('open');
    }
</script>

</body>
</html>
