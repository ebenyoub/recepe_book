<?php

require 'config/config.php';

$contact = contact_alone($bdd);
$id = $_GET['value'];

// Initialisation des variables
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
    change_row($bdd, $civilite, $nom, $prenom, $email, $telephone, $id);
}


$template = 'edit';
require 'views/layout.html.php';
$template = 'list';

?>
