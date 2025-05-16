<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valentin Frachot | Portfolio Ingénieur</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background: url('img/background.png') no-repeat center center fixed;
            background-size: cover;

            color: #2c3e50;
        }

        nav {
            background: #2c3e50;
            padding: 1rem 2rem;
            display: flex;
            justify-content: center;
        }

        nav a {
            color: #ecf0f1;
            margin: 0 15px;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #e74c3c;
        }

        .hero {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            min-height: 90vh;
            padding: 30px 20px;
        }

        .card {
            background: #fff;
            padding: 40px;
            border-radius: 25px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            max-width: 600px;
            width: 90%;
            animation: fadeIn 1.2s ease;
        }

        .profile-img {
            width: 160px;
            height: 160px;
            object-fit: cover;
            border-radius: 50%;
            border: 6px solid #2c3e50;
            box-shadow: 0 8px 16px rgba(0,0,0,0.15);
        }

        h1 {
            font-size: 2.8rem;
            margin: 20px 0 10px;
            color: #2c3e50;
        }

        p.subtitle {
            font-size: 1.3rem;
            color: #7f8c8d;
            font-style: italic;
            margin-bottom: 20px;
        }

        .about-me {
            font-size: 1.1rem;
            color: #34495e;
            line-height: 1.6;
            margin-top: 20px;
        }

        a.button {
            display: inline-block;
            margin-top: 30px;
            background: #e74c3c;
            color: white;
            padding: 12px 28px;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 600;
            transition: background 0.3s ease;
        }

        a.button:hover {
            background: #c0392b;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 600px) {
            .card {
                padding: 30px;
            }

            h1 {
                font-size: 2rem;
            }

            .about-me {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>

<?php include('header.php'); ?>

<section class="hero">
    <div class="card">
        <img src="img/test.png" alt="Photo de profil" class="profile-img">
        <h1>Valentin Frachot</h1>
        <p class="subtitle">Étudiant Ingénieur Généraliste ICAM</p>

        <div class="about-me">
            Passionné par le <strong>développement logiciel</strong> et la <strong>mécanique</strong>, je cherche à relever des défis techniques en combinant rigueur d’ingénieur et créativité. <br>
            Actuellement en 4ᵉ année à l’ICAM Grand Paris Sud, je suis à la recherche d’une alternance de 2 ans dans le développement ou la R&D à partir de septembre 2025.
        </div>

        <a href="projet.php" class="button">Voir mes projets</a>
    </div>
</section>

</body>
</html>
