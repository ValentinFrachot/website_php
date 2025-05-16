<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Frise Chronologique - Expériences</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            font-family: 'Arial', sans-serif;
            color: #333;
        }

        .timeline {
            position: relative;
            max-width: 800px;
            margin: auto;
        }

        .timeline::after {
            content: '';
            position: absolute;
            width: 4px;
            background-color: #3498db;
            top: 0;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }

        .container {
            position: relative;
            width: 90%;
            padding: 10px 40px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
        }

        .container::before {
            content: "";
            position: absolute;
            top: 45px;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
            background-color: #3498db;
            border: 4px solid white;
            border-radius: 50%;
            z-index: 1;
        }

        .container.left::before {
            right: -15px;
        }

        .container.right::before {
            left: -15px;
        }

        .container.left {
            left: -40%;
            text-align: right;
        }

        .container.right {
            left: 50%;
            text-align: left;
        }

        .content {
            background-color: white;
            padding: 15px 20px;
            border-radius: 8px;
            position: relative;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            margin-top: 10px;
        }

        .dropdown-btn {
            background-color: transparent;
            border: none;
            cursor: pointer;
            padding: 5px;
            margin-left: 10px;
            font-size: 20px;
            line-height: 0;
            transition: transform 0.3s;
        }

        .dropdown-btn::before {
            content: '';
            width: 0;
            height: 0;
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 10px solid #3498db;
            display: block;
            margin: 0 auto;
        }

        .container .dropdown-content {
            display: none;
            padding: 10px;
            margin-top: 10px;
            background-color: #f1f1f1;
            border-radius: 5px;
        }

        .container.active .dropdown-content {
            display: block;
        }

        .container.active .dropdown-btn::before {
            transform: rotate(180deg); /* Tourne le triangle lorsqu'on clique */
        }
        .logo-cea {
            width: 60px; /* Ajuste à ta convenance */
            height: auto;
            vertical-align: middle;
        }
        .logo-casd {
            width: 25%; /* Ajuste à ta convenance */
            height: auto;
            vertical-align: middle;
        }
        .logo-stellantis{
            width: 33%; /* Ajuste à ta convenance */
            height: auto;
            vertical-align: middle;
        }

        /* Responsive */
        @media screen and (max-width: 768px) {
            .timeline::after {
                left: 20px;
            }

            .container {
                width: 100%;
                padding-left: 50px;
                padding-right: 25px;
            }

            .container.right,
            .container.left {
                left: 0;
            }

            .container::before {
                left: 18px;
                right: auto;
            }

            .container .content {
                margin: 0;
                text-align: left;
            }

        }
    </style>
</head>
<body>

<?php include('header.php'); ?>

<div class="timeline">
    <div class="container left">
        <div class="content">
            <h3><button class="dropdown-btn"></button>Futur Stage - Ingénieur junior<img src="img/entreprise/logo_stellantis.png" alt="Logo Stellantis" class="logo-stellantis"></h3>
            <p>Stellantis (EASE) - Mai à Août 2025</p>
            <p>Soutien aux responsables opérationnels et managers des équipes.</p>
            <div class="dropdown-content">
                <h4>Missions données :</h4>
                <p>-Rédaction de rapports et de processus opérationnels liés à la Qualité et à la Sécurité des équipes;</p>
                <p>- Participation à la structuration de la documentation réglementaire et opérationnelle régissant les processus et outils;</p>
                <p>- Contribution à l’implémentation d’un outil de Gestion des Temps et des Activités opérationnelles (progiciel de GTA)</p>
                <p><strong>Maître de stage :</strong> <span>Eric Chorao</span></p>
                <p>Directeur des activités de maintenance et de conception de moyens d’essais chez Industrelec</p>
            </div>
        </div>
    </div>
    <div class="container right">
        <div class="content">
            <h3><button class="dropdown-btn"></button>Stage ingénieur junior développement d'application <img src="img/entreprise/casdc.jpg" alt="Logo CASD" class="logo-casd"></h3>
            <p>Centre d'Accès Sécurisée aux Données - Mai à Août 2024</p>
            <p>Développement d'une application de gestion des équipements présents dans les data centers.</p>
            <div class="dropdown-content">
                <h4>Présentation de l'entreprise : </h4>
                <p>Le CASD a pour mission de sécuriser et de faciliter l’accès aux données d'entreprises
                    privées (telles que Meta, Tiktok...) ainsi qu'aux données publiques, afin de soutenir les
                    travaux des chercheurs.</p>
                <p>Développement, conception et mise en œuvre d'une application de gestion des
                    équipements des data centers du CASD, avec intégration d'une base de données pour le
                    suivi et la gestion des ressources.</p>
                <p><strong>Missions éffectuées :</strong> <span>-Mise en relation avec le personnel IT pour comprendre aux mieux leurs besoins et assurer une adéquation optimale avec les objectifs techniques.</span></p>
                <p>-Développement de l’application avec le Framework Slim, programmation en language PHP et Twig pour le rendu graphique.</p>
                <p>-Ajout de tests unitaires pour garantir la fiabilité du code, et tests fonctionnels avec WebDriver pour valider l'expérience utilisateur.</p>
                <p><strong>Maître de stage :</strong> <span>Eric Debonnel</span></p>
                <p>Directeur du département IT et Datascience</p>
            </div>
        </div>
    </div>
    <div class="container left">
        <div class="content">
            <h3><button class="dropdown-btn"></button>Poursuite du stage au CEA <img src="img/entreprise/cea.png" alt="Logo CEA" class="logo-cea"></h3>
            <p>Commissariat à l'Énergie Atomique et aux Énergies Alternatives - Juin à Juillet 2023</p>
            <p>Ajout d'améliorations du gestionnaire d'études et création d'un wiki des différents outils/machines du département.</p>
            <div class="dropdown-content">
                <p>Ajout d’améliorations du gestionnaire d’études et création d’un wiki sur les différents outils du service.</p>
                <p>Présentations de l'outil et de son fonctionnement à des chercheurs</p>
                <p>Mise en relation avec des chercheurs afin d’ajouter de nouvelles études.</p>
            </div>
        </div>
    </div>
    <div class="container right">
        <div class="content">
            <h3><button class="dropdown-btn"></button>Stage technique Conception d'un outil de gestion <img src="img/entreprise/cea.png" alt="Logo CEA" class="logo-cea"></h3>
            <p>Commissariat à l'Énergie Atomique et aux Énergies Alternatives - Janvier à Mars 2023</p>
            <p>Développement d'un outil de gestion des études afin de centraliser les travaux de recherche du département.</p>
            <div class="dropdown-content">
                <h4>Présentation de l'entreprise : </h4>
                <p>Le CEA est un organisme public français de recherche spécialisé dans les domaines de l’énergie, de la défense, des technologies pour l'industrie et de la santé.</p>
                <p> J'ai pu travailler dans le SEMT, service du CEA, qui effectue de nombreuses études et recherches chaque année.
                    Cependant, aucun outil n’existe pour réellement centraliser ces études. Donc mon stage
                    avait pour objectif de mettre en place un gestionnaire d'études qui colle aux différents
                    besoins du service SEMT.</p>
                <p><strong>Missions éffectuées :</strong> <span>- Mise en place du gestionnaire sur Tuleap et sur un serveur de fichiers,</span>
                <p>- Création d'un programme pour aider les chercheurs à ajouter leurs études,</p>
                <p>- Présentation du gestionnaire aux chercheurs et ajout de leurs études dans le gestionnaire,</p>
                <p>- Présentation du gestionnaire lors de la réunion des équipes et lors de la réunion du service.</p>
                <p><strong>Maître de stage :</strong> <span>Jean-Charles Le Pallec</span></p>
                <p>Chef du laboratoire LM2S</p>
            </div>
        </div>
    </div>
</div>


<script>
    document.querySelectorAll('.dropdown-btn').forEach(button => {
        button.addEventListener('click', () => {
            const container = button.closest('.container');
            container.classList.toggle('active');
        });
    });
</script>

</body>
</html>
