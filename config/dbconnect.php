<?php
    $hostname = 'db.3wa.io';
    $dbname = 'elyasbenyoub_form_exo';
    $dbuser = 'elyasbenyoub';
    $dbpass = '347dcee3090875d93a990ec0c4e5c082';

    try {
        $bdd = new PDO("mysql:host=$hostname;dbname=$dbname;charset=utf8", $dbuser, $dbpass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch(PDOException $e) {
        die('Erreur : ' . $e->getMessage());
    }
    echo '<p style="bottom=0;left=0;display:block;" id="bdd">Connexion BDD réussie</p>';
?>
