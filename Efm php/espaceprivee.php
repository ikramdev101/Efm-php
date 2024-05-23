<?php
require_once "config.php";
session_start();
if (!isset($_SESSION['loginAdmin'])) {
    header('Location: index.php');
    exit();
}

$nom = $_SESSION['nom'];
$prenom = $_SESSION['prenom'];

date_default_timezone_set('Europe/Paris'); // Ajustez le fuseau horaire si nécessaire
$heure = date('H');

if ($heure < 18) {
    $message = "Bonjour";
} else {
    $message = "Bonsoir";
}
$sql = "SELECT * FROM stagiaire";
$stmt = $pdo->query($sql);
$stagiaires = $stmt->fetchAll(PDO::FETCH_ASSOC); 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Espace Privé</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 500px;
            text-align: center;
        }
        .container h2 {
            background-color: #4f4f4f;
            color: white;
            padding: 15px 0;
            margin: -20px -20px 20px -20px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .dev{
            display: flex;
            justify-content:left;
        }
        .btn{
            background-color: green;

        }

    </style>
</head>
<body>
    <div class="container">
        <h2>Espace Privé</h2>
        <p><?php echo "$message, $prenom $nom"; ?>!</p>
        <div class="dev">
        <a class="btn" href="Ajouter_Stagiaire.php" >Ajouter</a>
        </div><br>
        <table border="1">
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Date de Naissance</th>
            <th>Filiere</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
        <?php foreach ($stagiaires as $stagiaire) : ?>
            <tr>
                <td><?php echo $stagiaire['nom']; ?></td>
                <td><?php echo $stagiaire['prenom']; ?></td>
                <td><?php echo $stagiaire['dateNaissance']; ?></td>
                <td><?php echo $stagiaire['idFiliere']; ?></td>
                <td>
                    <a href="Modifier_Stagiaire.php" >Modifier</a>
                </td>
                <td>
                <a href="supprimer_stagiaire.php">Supprimer</a>

                </td>
            </tr>
        <?php endforeach; ?>
    </div>
   
</body>
</html>
