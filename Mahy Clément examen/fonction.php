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
    <?php
    function diviseurs($nb)
    {
        $i = 1;
        $diviseur = "";
        while($i<=$nb){
            if($nb % $i == 0){
                $diviseur = $diviseur . $i . " ";
            }
            $i = $i + 1;
        }
        return $diviseur;
    }
    ?>

    <?php
    function triangleRectangle($C1, $C2, $C3)
    {
        if(($C1>=$C2)&&($C1>=$C3))
        {
            $Pg = $C1;
            $Cote2 = $C2;
            $Cote3 = $C3;
        }
        elseif(($C2>=$C1)&&($C2>=$C3))
        {
            $Pg = $C2;
            $Cote2 = $C1;
            $Cote3 = $C3;
        }
        else
        {
            $Pg = $C3;
            $Cote2 = $C1;
            $Cote3 = $C2;
        }
        if($Pg<$Cote2+$Cote3)
        {
            if($Pg^2 == $Cote2^2 + $Cote3^2)
            {
                if($Cote2 == $Cote3)
                {
                    $Message = "Triangle rectangle isocèle";
                }
                else
                {
                    $Message = "Triangle rectangle";
                }
            }
            else
            {
                $Message = "Le triangle n'est pas rectangle";
            }
        }
        else
        {
            $Message = "Ces dimensions ne peuvent être celles d'un triangle";
        }
        return $Message;
    }
    ?>

    <div class="menu flex justify-content-space-around">
        <a href="index.php"><li class="menul">Home</li></a>
        <a href="fonction.php"><li class="menul">Fonctions</li></a>
        <li class="menul">Contact</li>
    </div>
    <div class="page">
        <h1>Affichage avec des fonctions PHP</h1>
        <div class="flex">
            <div class="form_gauche">
                <h2>Trouver les diviseurs d'un nombre</h2>
                <p>Le nombre 725 à <?=diviseurs(725)?> comme diviseurs</p>
            </div>
            <div class="form_droite">
                <h2>Est-ce un triangle rectangle et lequel.</h2>
                <p><?=triangleRectangle(32, 32, 36)?></p>
            </div>
        </div>
        <h1>Affichage sans fonctions PHP</h1>
        <div class="flex">
            <div class="form_gauche">
                <h2>Changer un nombre par un autre</h2>

            </div>
            <div class="form_droite">
                <h2>Remplacer les voyelles et consonnes</h2>
                    <php? $chaine = "kayak" ?>
                    <php? for($i = 0; $i < strlen($chaine); $i++): ?>
                        if($chaine[$i] == "a" || $chaine[$i] == "e" || $chaine[$i] == "i" || $chaine[$i] == "o" || $chaine[$i] == "u"):
                            echo <li>1</li>
                        else:
                            echo <li>0</li>
                        endif;
                        $i = $i + 1;
            </div>
        </div>
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