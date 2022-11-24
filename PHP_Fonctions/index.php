<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fonctions</title>
</head>
<body>
    <?php 
        function factorielle( $nombreDepart)
        {
            $resultatFact = 1;
            for ($i = 1; $i <= $nombreDepart; $i++)
            {
                $resultatFact = $resultatFact * $i;
            } 
            return $resultatFact;
        }
    ?>

    <h1>Factorisation</h1>
    <p>La factorisation de 7 est <?=factorielle(7)?>.</p>

    <?php
        function OccCarDansTexte()
        {
            $longueurChaine = strlen($chaineDepart);
            $nbOccurences = 0;
        }
    ?>
</body>
</html>