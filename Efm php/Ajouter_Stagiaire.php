<?php

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Stagiaire</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .container h2 {
            margin-top: 0;
            color: #333;
        }
        .container form {
            display: flex;
            flex-direction: column;
        }
        .container form label {
            margin-bottom: 5px;
            color: #666;
        }
        .container form input, .container form select {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .container form input[type="file"] {
            padding: 3px;
        }
        .container form button {
            padding: 10px;
            background-color: #28a745;
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }
        .container form button:hover {
            background-color: #218838;
        }
        .back-link {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            color: #28a745;
            text-decoration: none;
        }
        .back-link svg {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="#" class="back-link">
            <svg width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
            </svg>
            Retour
        </a>
        <h2>Ajouter un Stagiaire</h2>
        <p>veuillez remplir tous les champs</p>
        <form>
            <label for="nom">NOM</label>
            <input type="text" id="nom" name="nom" required>
            
            <label for="prenom">PRÉNOM</label>
            <input type="text" id="prenom" name="prenom" required>
            
            <label for="date_naissance">DATE NAISSANCE</label>
            <input type="date" id="date_naissance" name="date_naissance" required>
            
            <label for="photo_profil">PHOTO PROFIL</label>
            <input type="file" id="photo_profil" name="photo_profil">
            
            <label for="filiere">FILIÈRE</label>
            <select id="filiere" name="filiere" required>
                <option value="developpement_digital">Développement Digital</option>
                <!-- Ajoutez d'autres options ici si nécessaire -->
            </select>
            
            <button type="submit">AJOUTER</button>
        </form>
    </div>
</body>
</html>
