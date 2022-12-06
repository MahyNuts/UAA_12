<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahy Clément Examen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="menu flex justify-content-space-around">
        <a href="index.php"><li class="menul">Home</li></a>
        <a href="fonction.php"><li class="menul">Fonctions</li></a>
        <li class="menul">Contact</li>
    </div>
    <div class="page flex justify-content-space-around">
        <div class="gauche flex align-content-center flex-direction-column">
            <p>Galerie Images</p>
            <div class="galerie">
                <div class="flex images">
                    <img src="images/php.png" alt="php" width="50px">
                    <img src="images/php.png" alt="php" width="50px">
                </div>
                <div class="flex images">
                    <img src="images/php.png" alt="php" width="50px">
                    <img src="images/php.png" alt="php" width="50px">
                </div>
                <div class="flex images">
                    <img src="images/php.png" alt="php" width="50px">
                    <img src="images/php.png" alt="php" width="50px">
                </div>
                <div class="flex images">
                    <img src="images/php.png" alt="php" width="50px">
                    <img src="images/php.png" alt="php" width="50px">
                </div>
            </div>
        </div>
        <div class="centre flex justify-content-space-around">
            <div class="centre_gauche">
                <fieldset>
                    <legend>Vos informations</legend>
                    <div class="flex flex-direction-column">
                        <label for="nom">Votre nom</label>
                        <input type="text" id="nom" name="nom" class="rapt">
                    </div>
                    <div class="flex flex-direction-column">
                        <label for="prenom">Votre prénom</label>
                        <input type="text" id="prenom" name="prenom" class="rapt">
                    </div>
                    <div class="flex flex-direction-column">
                        <label for="email">Votre mail</label>
                        <input type="email" id="email" name="email" class="rapt">
                    </div>
                    <div class="flex flex-direction-column">
                        <label for="phone">Votre numéro de téléphone</label>
                        <input type="tel" id="phone" name="phone" class="rapt">
                    </div>
                </fieldset>
            </div>
            <div class="centre_droite">
                <fieldset>
                    <legend>Votre commande</legend>
                    <div class="flex flex-direction-column">
                        <label for="possibilites">Choisissez parmi les possibilités</label>
                        <select name="possibilites" id="possibilites"  class="rapt">
                            <optgroup label="Hardware">
                                <option value="ecran">Ecran</option>
                                <option value="souris">Souris</option>
                                <option value="clavier">Clavier</option>
                                <option value="ram">RAM</option>
                                <option value="disque_dur">Disque dur</option>
                            </optgroup>
                            <optgroup label="Software">
                                <option value="office">Office 365</option>
                                <option value="packet_tracer">Packet Tracer</option>
                                <option value="google_workspace">Google Workspace</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="flex flex-direction-column">
                        <label for="quantite">La quantité souhaitée</label>
                        <input type="number" name="quantite" id="quantite" value="1" min="1" max="10" class="rapt">
                    </div>
                    <div class="flex flex-direction-column">
                        <label for="date">Date de commande souhaitée</label>
                        <input type="date" name="date" id="date" class="rapt">
                    </div>
                    <div class="flex flex-direction-column">
                        <label for="quantite">Facture choisie</label>
                        <div class="flex flex-direction-column">
                            <div>
                                <input type="radio" id="pmail" name="facture" checked>
                                <label for="pmail">Par mail</label>
                            </div>
                            <div>
                                <input type="radio" id="ppapier" name="facture">
                                <label for="ppapier">Par papier</label>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-direction-column">
                        <label for="quantite">Remarques supplémentaires</label>
                        <textarea name="remarques" id="remarques" cols="30" rows="10"></textarea>
                    </div>
                </fieldset>
            </div>
            
        </div>
        <div class="droite">
        <p>Galerie Images</p>
            <div class="galerie">
                <div class="flex images">
                    <img src="images/php.png" alt="php" width="50px">
                    <img src="images/php.png" alt="php" width="50px">
                </div>
                <div class="flex images">
                    <img src="images/php.png" alt="php" width="50px">
                    <img src="images/php.png" alt="php" width="50px">
                </div>
                <div class="flex images">
                    <img src="images/php.png" alt="php" width="50px">
                    <img src="images/php.png" alt="php" width="50px">
                </div>
                <div class="flex images">
                    <img src="images/php.png" alt="php" width="50px">
                    <img src="images/php.png" alt="php" width="50px">
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-content-space-around">
        <button>Envoyer</button>
    </div>
    <footer>
        <div class="flex justify-content-space-between">
            <div class="footer_element">
                <p>Examen 2022-2023</p>
                <p>UAA12:Création d'un site web dynamqiue</p>
            </div>
            <div class="footer_element">
                <p>5TTi</p>
            </div>
        </div>
    </footer>
</body>
</html>