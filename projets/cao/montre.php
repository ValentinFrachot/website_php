<?php
// page.php - Page pour montrer une modélisation de montre
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modélisation 3D - Montre</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
        }
        .container {
            max-width: 1000px;
            margin: 40px auto;
            padding: 20px;
            background: white;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            border-radius: 12px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        p.description {
            text-align: center;
            margin-bottom: 30px;
            font-size: 18px;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .gallery img {
            width: 300px;
            border-radius: 10px;
            object-fit: cover;
            transition: transform 0.3s;
        }
        .gallery img:hover {
            transform: scale(1.05);
        }
        .viewer3d {
            margin-top: 40px;
            text-align: center;
        }
        iframe {
            width: 100%;
            height: 600px;
            border: none;
            border-radius: 12px;
        }
    </style>
</head>
<body>

<div class="container">
    <a href="/mvc/view/projets/cao.php" class="back-button">&larr; Retour à la CAO</a>
    <h1>Modélisation 3D - Montre</h1>
    <p class="description">
        Voici une modélisation 3D d'une montre que j'ai réalisée. Ce projet m'a permis de travailler sur les détails fins, la géométrie précise, et les matériaux réalistes.
    </p>

    <div class="gallery">
        <img src="/mvc/view/img/projets/cao/montre/photo1.png" alt="Montre Vue 1">
        <img src="/mvc/view/img/projets/cao/montre/photo2.png" alt="Montre Vue 2">
        <img src="/mvc/view/img/projets/cao/montre/photo3.png" alt="Montre Vue 3">
    </div>
    <div class="sketchfab-embed-wrapper"> <iframe title="montre3d" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/bd3c89e881084868b07394e78afc5033/embed"></iframe>
        <p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A;">
            <a href="https://sketchfab.com/3d-models/montre3d-bd3c89e881084868b07394e78afc5033?utm_medium=embed&utm_campaign=share-popup&utm_content=bd3c89e881084868b07394e78afc5033" target="_blank" rel="nofollow" style="font-weight: bold; color: #1CAAD9;"> montre3d </a> by
            <a href="https://sketchfab.com/valentinFrac?utm_medium=embed&utm_campaign=share-popup&utm_content=bd3c89e881084868b07394e78afc5033" target="_blank" rel="nofollow" style="font-weight: bold; color: #1CAAD9;"> valentinFrac </a> on <a href="https://sketchfab.com?utm_medium=embed&utm_campaign=share-popup&utm_content=bd3c89e881084868b07394e78afc5033" target="_blank" rel="nofollow" style="font-weight: bold; color: #1CAAD9;">Sketchfab</a>
        </p>
    </div>
</div>
</body>
</html>
