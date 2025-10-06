<?php

require_once __DIR__ . '/../config/db_connect.php';
require_once __DIR__ . '/../config/functions.php';

// Récupération des 4 derniers articles depuis la base de données
// TODO ... 

// Récupération des catégories depuis la base de données
$sql = "SELECT * FROM categories";
$stmt = $db->prepare($sql);
$stmt->execute();
$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Affichage de la page d'accueil
require_once __DIR__ . '/../templates/index.html.php';

