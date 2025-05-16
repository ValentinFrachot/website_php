<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Projet Drone FPV</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f5f9;
            margin: 0;
            padding: 0;
            color: #333;
        }

        header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        .step {
            margin-bottom: 30px;
        }

        .step h3 {
            margin-top: 0;
        }

        .step p {
            margin: 10px 0;
        }

        .step img {
            width: 100%;
            height: auto; /* ✅ conserve le ratio */
            border-radius: 8px;
            margin-top: 10px;
        }

        footer {
            text-align: center;
            margin-top: 40px;
            padding: 20px;
            background-color: #eee;
            font-size: 0.9em;
        }
    </style>
</head>
<body>

<header>
    <h1>Construction d'un Drone FPV</h1>
    <p>Étapes de conception et d’assemblage</p>
</header>

<div class="container">
    <a href="/mvc/view/projets/autres_projets.php" class="back-button">&larr; Retour aux projets</a>
    <div class="step">
        <h2>1. Choix des composants</h2>
        <p>Sélection des moteurs, ESC, châssis, contrôleur de vol, caméra FPV, VTX, antenne, batterie LiPo, récepteur, et radio commande.</p>
        <img src="/mvc/view/img/projets/autres_projets/drone_fpv/composants.png" alt="Composants du drone">
    </div>

    <div class="step">
        <h2>2. Assemblage du châssis</h2>
        <p>Montage du châssis en carbone, installation des bras et du support de caméra.</p>
        <img src="/mvc/view/img/projets/autres_projets/drone_fpv/drone_fpv_debut.png" alt="Montage du châssis">
    </div>

    <div class="step">
        <h2>3. Installation des moteurs et ESC</h2>
        <p>Fixation des moteurs sur les bras et mise en place de l'ESC.</p>
        <img src="/mvc/view/img/projets/autres_projets/drone_fpv/moteurs_poses.png" alt="Moteurs et ESC installés">
    </div>

    <div class="step">
        <h2>4. Soudure </h2>
        <p>Soudure des moteurs sur l'ESC.</p>
        <img src="/mvc/view/img/projets/autres_projets/drone_fpv/soudure.png" alt="Moteurs et ESC installés">
    </div>

    <div class="step">
        <h2>4. Connexions électroniques</h2>
        <p>Branchement du contrôleur de vol, du VTX, de la caméra FPV, et du récepteur.</p>
        <img src="/mvc/view/img/projets/autres_projets/drone_fpv/esc.png" alt="Câblage des composants">
    </div>

    <div class="step">
        <h2>5. Configuration logicielle</h2>
        <p>Utilisation de Betaflight pour flasher le firmware, configurer les PID, les modes de vol et tester les moteurs.</p>
        <img src="/mvc/view/img/projets/autres_projets/drone_fpv/betaflight.png" alt="Configuration Betaflight">
    </div>

    <div class="step">
        <h2>6. Premiers vols et ajustements</h2>
        <p>Tests en vol, calibrations finales, ajustement de l’antenne et vérification des signaux vidéo et radio.</p>
        <video controls width="100%" style="border-radius: 8px; margin-top: 10px;">
            <source src="/mvc/view/img/projets/autres_projets/drone_fpv/drone_vol.mp4" type="video/mp4">
            Votre navigateur ne supporte pas la vidéo HTML5.
        </video>
    </div>
</div>
</body>
</html>
