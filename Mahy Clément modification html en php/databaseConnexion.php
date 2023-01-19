<?php
    try{
        $strConnection = ('mysql:host=10.10.51.252;dbname=immobilier;port=3306');
        $pdo = new PDO($strConnection, "clement", "root");   
    } catch (PDOException $e){
        die("Erreur : " . $e->getMessage());
    }
?>