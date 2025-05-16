<!-- header.php -->
<body>
<nav class="navbar">
    <ul>
        <li><a href="/mvc/view/home.php">Accueil</a></li>
        <li><a href="/mvc/view/skills.php">Compétences</a></li>
        <li><a href="/mvc/view/projet.php">Projets</a></li>
        <li><a href="/mvc/view/experience.php">Expériences</a></li>
        <li><a href="/mvc/view/cv.php">Mon Cv</a></li>
        <li><a href="/mvc/view/contact.php">Contact</a></li>
    </ul>
</nav>
</body>
<style>
    body {
        margin: 0;
        padding: 0;
        background-color: #f4f4f9;
        font-family: 'Arial', sans-serif;
        color: #333;
    }
    .navbar {
        background-color: #333;
        padding: 15px 0;
        display: flex;
        justify-content: center;
    }

    .navbar ul {
        list-style: none;
        display: flex;
        gap: 30px;
        margin: 0;
        padding: 0;
    }

    .navbar li a {
        color: white;
        text-decoration: none;
        font-weight: bold;
        font-size: 1rem;
        transition: color 0.3s ease;
    }

    .navbar li a:hover {
        color: #ffcc00;
    }
</style>
