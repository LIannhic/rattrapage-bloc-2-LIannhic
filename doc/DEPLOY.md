# Guide du déploiement

## Expliquez ci-dessous les étapes de déploiement de cette application :

### Étape 1 :

- Vérifier la compatibilité du serveur avec les pré-requis du document README.md

### Etape 2 :

* Copier le projet sur le serveur

### Etape 3 :

* Créer la base de donnée avec le script du fichier ecf-blog.sql

### Etape 4 :

* Modifier le fichier bd_connect.php en fonction des nouvelles informations

```
php
<?php
try {
    $db = new PDO('mysql:host=VOTRE_SERVEUR;dbname=ecf-blog', 'VOTRE_UTILISATEUR', 'VOTRE_MDP', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}

```

* Remplacez `VOTRE_SERVEUR` .
* Remplacez `VOTRE_UTILISATEUR` . 
* Remplacez `VOTRE_MDP` .
