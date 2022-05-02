<?php

// Sécuriser les données
function securisation($champ)
{
    $champ = trim($champ);
    $champ = strip_tags($champ);
    $champ = htmlspecialchars($champ, ENT_QUOTES);
    return $champ;
}

//liste des contacts
function liste($bdd) {
    $req = $bdd->prepare("SELECT id, civil, nom, prenom, email, tel FROM formulaire ORDER BY id");
    $req->execute();
    $data = $req->fetchAll();
    return $data;
}

//props contacts a modifier
function contact_alone($bdd) {
    $id = $_GET['value'];
    $req = $bdd->prepare("SELECT civil, nom, prenom, email, tel FROM formulaire WHERE id=$id;");
    $req->execute();
    $data = $req->fetch();
    return $data;
}


// Ajout d'un contact
function ajout($bdd, $civilite, $nom, $prenom, $email, $telephone)
{
    // Récupération de l'adresse IP
    $ip = $_SERVER['REMOTE_ADDR'];

    // Préparation de la requête SQL
    $req = $bdd->prepare("INSERT INTO formulaire (civil, nom, prenom, email, tel, id_addr) VALUES (:civil, :nom, :prenom, :email, :tel, :ip)");

    // Bind des paramètres
    $req->bindParam(':civil', $civilite);
    $req->bindParam(':nom', $nom);
    $req->bindParam(':prenom', $prenom);
    $req->bindParam(':email', $email);
    $req->bindParam(':tel', $telephone);
    $req->bindParam(':ip', $ip);

    // Exécution de la requête
    $req->execute();
    var_dump($bdd->lastInsertId());
    return $bdd->lastInsertId();
}

function change_row($bdd, $civilite, $nom, $prenom, $email, $telephone, $id) {

    try {
        $sql = ("UPDATE formulaire SET civil = :civilite, nom = :nom, prenom = :prenom, email = :email, tel = :telephone WHERE id = :id");

        // Prepare statement
        $stmt = $bdd->prepare($sql);

            // Bind des paramètres
        $stmt->bindParam(':civilite', $civilite);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telephone', $telephone);
        $stmt->bindParam(':id', $id);

        // execute the query
        $stmt->execute();

        // echo a message to say the UPDATE succeeded
        echo $stmt->rowCount() . " records UPDATED successfully";
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}

