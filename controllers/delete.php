<?php

require 'config/config.php';

$id = $_GET['value'];

try {
     /*sql to delete a record*/
    $sql = "DELETE FROM formulaire WHERE id=$id";

    /*use exec() because no results are returned*/
    $bdd->exec($sql);
    echo '<p class="alert alert-success" id="msg">Record deleted successfully</p>';
    }
catch(PDOException $e)
    {
    echo '<p class="alert alert-danger" id="msg">' .$sql . "
" . $e->getMessage() . '</p>';
    }

$template = 'list';
require 'views/layout.html.php';

?>
