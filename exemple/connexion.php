<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/animation.css">
    <link rel="stylesheet" href="CSS/flex.css">
    <link rel="stylesheet" href="CSS/form.css">
    <title>Mon agence</title>
</head>
<body>
    <header>
        <ul class="flex space-evenly">
            <li class="menu"><a href="index.php">Home</a></li>
            <li  class="menu"><a href="profil.php">Page profil</a></li>
            <li  class="menu"><a href="connexion.php">Connexion</a></li>
            <li class="imageMenu"><a href="index.html"><ion-icon size="large" name="home-outline"></ion-icon></a></li>
            <li class="imageMenu"><a href="profil.html"><ion-icon size="large" name="person-outline"></ion-icon></a></li>
        </ul>
    </header>
    <main>
        <div class="flex space-evenly wrap">
            <form method="post" action="">
                <fieldset>
                    <legend>Se connecter</legend>
                    <div class="mb-3">
                        <label for="Login" class="form-label">Login</label>
                        <input type="text" placeholder="Login" class="form-control" id="Login" aria-describedby="emailHelp" name="txtLogin" required>
                    </div>
                    <div class="mb-3">
                        <label for="Password" class="form-label">Mot de passe</label>
                        <input type="password" placeholder="Mot de passe" class="form-control" id="Password" name="txtMp" required>
                    </div>
                    <div>
                        <button name="btnEnvoi" class="btn btn-primary">Envoi</button>
                    </div>
                </fieldset>
            </form>
            <div>
                <h3 class="text-danger">Pas encore inscrit ?</h3>
                <a href="inscriptionOrEditProfil.php" class="btn btn-secondary">Clique</a>
            </div>
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