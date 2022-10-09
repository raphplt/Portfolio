<?php
// Informations d'identification
define('DB_SERVER', 'localhost');
define('DB_USERNAMME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'portfolio');

// Connexion à la base de données MySQL
$conn = mysqli_connect(DB_SERVER, DB_USERNAMME, DB_PASSWORD, DB_NAME);

// Vérification de la connexion 
if($conn == false){
    die("Erreur: impossible de se connecter à la base de données." . mysqli_connect_error());
}
?>
