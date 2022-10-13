<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahy Clément Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <fieldset>
            <legend>Vos coordonnées</legend>
            <form action="">
                <label for="name">Nom : </label>
                <input type="text" name="name" id="name">
            </form>
            <form action="">
                <label for="surname">Prénom : </label>
                <input type="text" name="surname" id="surname">
            </form>
            <form action="">
                <label for="birthday">Date de naissance : </label>
                <input type="date" name="birthday" id="birthday">
            </form>
            <form action="">
                <label for="email">Email : </label>
                <input type="email" name="email" id="email">
            </form>
            <form action="">
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
            </form>
        </fieldset>
    </div>
    
    <div>
        <fieldset>
            <legend>Périodicité</legend>
            <form action="">
                <div>
                    <input type="radio" id="hebdo" name="newsletter" value="hebdomadaire">
                    <label for="hebdo">Newsletter hebdomadaire</label>
                </div>
                <div>
                    <input type="radio" id="mensu" name="newsletter" value="mensuelle">
                    <label for="mensu">Newsletter mensuelle</label>
                </div>
                <div>
                    <input type="radio" id="trim" name="newsletter" value="trimestrielle">
                    <label for="trim">Newsletter trimestrielle</label>
                </div>
            </form>
        </fieldset>
    </div>
    <div>
        <fieldset>
            <legend>Version papier / informatique</legend>
            <form action="">
                <div>
                    <input type="checkbox" id="papier" name="papinf" value="papier">
                    <label for="papier">Recevoir la version papier</label>
                </div>
                <div>
                    <input type="checkbox" id="info" name="papinf" value="info">
                    <label for="info">Recevoir la version informatique</label>
                </div>
                <div>
                    <label for="copies">Nombre de copies souhaitées : </label>
                    <input type="number" id="copies" name="copies" value="copies">
                </div>
            </form>
        </fieldset>
    </div>
    
    <button>Envoyer</button>
</body>
</html>