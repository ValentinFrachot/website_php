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
<?php include('/Applications/XAMPP/xamppfiles/htdocs/mvc/view/header.php'); ?>

<div class="container">
    <h1>Mes projets</h1>
    <div class="project-grid">
        <!-- Projet : Modélisation 3D -->
        <div class="project-card">
            <img src="/mvc/view/img/projets/maison/archi.png" alt="Modélisation 3D">
            <div class="project-content">
                <h2>Architecture</h2>
                <p>Modélisation et design d'une montre sur Shappr 3D</p>
            </div>
        </div>

        <div class="project-card">
            <img src="/mvc/view/img/projets/maison/elec.png" alt="Modélisation 3D">
            <div class="project-content">
                <h2>Partie électrique</h2>
                <p>Modélisation et design d'une montre sur Shappr 3D</p>
            </div>
        </div>

        <div class="project-card">
            <img src="/mvc/view/img/projets/maison/structure.png" alt="Modélisation 3D">
            <div class="project-content">
                <h2>Partie stucture</h2>
                <p>Modélisation et design d'une montre sur Shappr 3D</p>
            </div>
        </div>

        <div class="project-card">
            <img src="/mvc/view/img/projets/maison/eau.png" alt="Modélisation 3D">
            <div class="project-content">
                <h2>Management de l'eau</h2>
                <p>Modélisation et design d'une montre sur Shappr 3D</p>
            </div>
        </div>

        <div class="project-card">
            <img src="/mvc/view/img/projets/maison/planning.png" alt="Modélisation 3D">
            <div class="project-content">
                <h2>Paln d'action et planning</h2>
                <p>Modélisation et design d'une montre sur Shappr 3D</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
