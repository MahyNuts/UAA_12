<?php
    require_once "database.php";

    $sth = $pdo->prepare("select * from users");
    $sth->execute();

    print("Récupération de toutes les lignes d'un jeu de résultats :\n");
    $result = $sth->fetchAll(PDO::FETCH_OBJ);
    print_r($result);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
</head>
<body>
    
</body>
</html>