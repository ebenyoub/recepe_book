<?php

// Connexion à la base de données
require 'config/dbconnect.php';

// Initialisation des variables
$id = 0;
$civilite = '';
$nom = '';
$prenom = '';
$email = '';
$telephone = '';
$systemMsg = '';
$target = $_SERVER['PHP_SELF'];

// Le tableau $_POST est-il rempli ?
if (!empty($_POST)) {
    // Récupération des données du formulaire
    // Tester si le champ civilité a bien été transmis, car case à cocher
    if (isset($_POST['civil'])) {
        $civilite = $_POST['civil'];
    }
    $nom = securisation($_POST['nom']);
    $prenom = securisation($_POST['prenom']);
    $email = securisation($_POST['email']);
    $telephone = securisation($_POST['tel']);
    $id = ajout($bdd, $civilite, $nom, $prenom, $email, $telephone);
    if ($id > -1) {
        $systemMsg = 'Contact '.$id.' ajouté';
    }
}
$template = 'home';
require 'views/layout.html.php';

?>