<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahy Clément Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <form action="">
            <div class="flex justify-content-center">
                <div class="flex justify-content-flex-start gauche">
                    <fieldset class="coord">
                        <legend>Vos coordonnées</legend>
                        <div class="ecartg">
                            <label for="name">Nom : </label>
                            <input type="text" name="name" id="name">
                        </div>
                        <div class="ecartg">
                            <label for="surname">Prénom : </label>
                            <input type="text" name="surname" id="surname">
                        </div>
                        <div class="ecartg">
                            <label for="birthday">Date de naissance : </label>
                            <input type="date" name="birthday" id="birthday">
                        </div>
                        <div class="ecartg">
                            <label for="email">Email : </label>
                            <input type="email" name="email" id="email">
                        </div>
                        <div class="ecartg">
                            <label for="country">Pays : </label>
                            <select name="country" id="country">
                                <optgroup label="Europe">
                                    <option value="belgium">Belgique</option>
                                    <option value="france">France</option>
                                </optgroup>
                                <optgroup label="Asie">
                                    <option value="china">Chine</option>
                                    <option value="japan">Japon</option>
                                </optgroup>
                            </select>
                        </div>  
                    </fieldset>
                </div>
                <div class="flex justify-content-flex-end droite">
                    <div class="flex flex-direction-column">
                        <div>
                            <fieldset class="perio">
                                <legend>Périodicité</legend>
                                    <div class="ecart">
                                        <input type="radio" id="hebdo" name="newsletter" value="hebdomadaire">
                                        <label for="hebdo">Newsletter hebdomadaire</label>
                                    </div>
                                    <div class="ecart">
                                        <input type="radio" id="mensu" name="newsletter" value="mensuelle">
                                        <label for="mensu">Newsletter mensuelle</label>
                                    </div>
                                    <div class="ecart">
                                        <input type="radio" id="trim" name="newsletter" value="trimestrielle">
                                        <label for="trim">Newsletter trimestrielle</label>
                                    </div>
                            </fieldset>
                        </div>
                        <div>
                            <fieldset class="version">
                                <legend>Version papier / informatique</legend>
                                    <div class="ecart">
                                        <input type="checkbox" id="papier" name="papinf" value="papier">
                                        <label for="papier">Recevoir la version papier</label>
                                    </div>
                                    <div class="ecart">
                                        <input type="checkbox" id="info" name="papinf" value="info">
                                        <label for="info">Recevoir la version informatique</label>
                                    </div>
                                    <div class="ecart">
                                        <label for="copies">Nombre de copies souhaitées : </label>
                                        <input type="number" id="copies" name="copies" value="copies">
                                    </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bouton flex justify-content-center">
                    <button>Envoyer</button>
            </div>
        </form>
    </main>
</body>
</html>