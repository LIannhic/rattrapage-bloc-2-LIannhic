<?php
require_once __DIR__ . '/../config/db_connect.php';
require_once __DIR__ . '/../config/functions.php';

// Récupération des articles depuis la base de données
$sql = "SELECT * FROM articles";
$stmt = $db->prepare($sql);
$stmt->execute();
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Récupération des catégories depuis la base de données
$sql = "SELECT * FROM categories";
$stmt = $db->prepare($sql);
$stmt->execute();
$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Inclusion du template d'affichage des articles
include __DIR__ . '/../templates/blog.html.php';