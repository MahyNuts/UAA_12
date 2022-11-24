<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulation PHP</title>
</head>
<body>
    <h1>Exercice 1</h1>
    <?php for ($i = 1; $i <= 10; $i++) : ?>
        <p>Le nombre vaut <?=$i?> </p>
    <?php endfor ?>
    
    <h1>Exercice 2</h1>
    <?php for ($i = 1; $i <= 10; $i++) : ?>
        <?php if ($i != 3) : ?>
            <p>Le nombre vaut <?=$i?></p>
        <?php endif ?>
    <?php endfor ?>
    
    <h1>Exercice 3</h1>
    <?php for ($i = 1; $i <= 10; $i++) : ?>
        <?php if ( $i<4 || $i>7) : ?>
            <p>Le nombre vaut <?=$i?></p>
        <?php endif ?>
    <?php endfor ?>

    <h1>Exercice 4</h1>
    <?php $n1 = -5;
    $n2 = 10;?>
    
    <p>La valeur absolue de <?=$n1?> vaut <?=abs($n1)?></p>
    <p>La valeur absolue de <?=$n2?> vaut <?=abs($n2)?></p>
    
</body>
</html>