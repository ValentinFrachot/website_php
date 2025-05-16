<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Cv digital</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            font-family: 'Arial', sans-serif;
            overflow-x: hidden;
            color: #333;
        }
        .container {
            background-color: white;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
        }

        .links a {
            display: inline-block;
            margin: 10px 20px;
            text-decoration: none;
            color: #0073b1;
            font-size: 18px;
            transition: transform 0.2s ease, color 0.2s ease;
        }

        .links a:hover {
            transform: scale(1.1);
            color: #005582;
        }

        .logo {
            width: 24px; /* Ajuste ici selon tes besoins */
            height: auto;
            vertical-align: middle;
            margin-right: 8px;
        }
    </style>
</head>
<body>
<?php include('header.php'); ?>
<div class="container">
    <h1>Contactez-moi</h1>
    <div class="links">
        <a href="https://www.linkedin.com/in/valentin-frachot-588223276" target="_blank">
            <img src="img/logo/logo_inkedin.webp" alt="Logo LinkedIn" class="logo"> LinkedIn
        </a>
        <a href="mailto:frachot.valentin@gmail.com">
            <img src="img/logo/logo_gmail.webp" alt="Logo Gmail" class="logo"> frachot.valentin@gmail.com
        </a>
        <a href="https://github.com/ValentinFrachot" target="_blank">
            <img src="img/logo/logo_github.png" alt="Logo GitHub" class="logo"> GitHub
        </a>

    </div>
</div>
</body>
</html>
