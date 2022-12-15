<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/animation.css">
    <title>Connexion</title>
</head>

<body>
    <header>
        <ul class="flex space-evenly">
            <li class="menu"><a href="index.php">Home</a></li>
            <li class="menu"><a href="profil.php">Page profil</a></li>
            <li class="menu"><a href="connexion.php">Connexion</a></li>
            <li class="imageMenu"><a href="index.php">
                    <ion-icon size="large" name="home-outline"></ion-icon>
                </a></li>
            <li class="imageMenu"><a href="profil.php">
                    <ion-icon size="large" name="person-outline"></ion-icon>
                </a></li>
        </ul>
    </header>
    <main>
        <div class="flex align-item-center space-around">
            <form action="inscription">
                <fieldset>
                    <legend>Inscription</legend>
                    <div class="intp">
                        <label for="nom">Nom </label>
                        <input type="text" id="nom">
                    </div>
                    <div class="intp">
                        <label for="prenom">Prénom </label>
                        <input type="text" id="prenom">
                    </div>
                    <div class="intp">
                        <label for="email">Email </label>
                        <input type="email" id="email">
                    </div>
                    <div class="intp">
                        <label for="motdpasse">Mot de passe </label>
                        <input type="password" id="motdpasse">
                    </div>
                    <div class="intp">
                        <label for="motdpassex">Valider le mot de passe </label>
                        <input type="password" id="motdpassex">
                    </div>
                    <button class="inscrire">S'inscrire</button>
                    <div class="intp">
                        <p><a href="connexion.php">Déjà un compte ?</a></p>
                    </div>
                </fieldset>
            </form>
        </div>

    </main>
    <footer>
        <div class="flex space-between align-item-center">
            <p><a href="https://www.christinesurges.be/" target="_blank" title="Aller à l'agence">Voir l'agence</a></p>
            <div>
                <img class="imageIcon" src="Images/icon1.jpg" alt="image twitter">
                <img class="imageIcon" src="Images/icon2.jpg" alt="image facebook">
                <img class="imageIcon" src="Images/icon3.jpg" alt="image google">
            </div>
        </div>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>