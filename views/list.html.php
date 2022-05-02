<?php


    $reponse = $bdd->query('SELECT * FROM formulaire');
    echo '<div><table class="table table-striped table-hover">';
        echo '<tr>';
            echo '<th scope="col">Id</th>';
            echo '<th scope="col">Nom/prénom</th>';
            echo '<th scope="col">Civilité</th>';
            echo '<th scope="col">Email</th>';
            echo '<th scope="col">Téléphone</th>';
            echo '<th scope="col">Date de création</th>';
            echo '<th></th>';
            echo '<th></th>';
        echo '</tr>';
        while($donnees = $reponse->fetch())
        {
        echo '<tr>';
            echo '<td>'.$donnees['id'].'</td>';
            echo '<td>'.$donnees['nom'].' '.$donnees['prenom'].'</td>';
            echo '<td>'.civilities($donnees['civil']).'</td>';
            echo '<td>'.$donnees['email'].'</td>';
            echo '<td>'.$donnees['tel'].'</td>';
            echo '<td>'.$donnees['date_creation'].'</td>'; ?>
            <td><a href="index.php?page=edit&value=<?php echo $donnees['id']?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
            <td><a href="index.php?page=delete&value=<?php echo $donnees['id']?>"><i class="fa-solid fa-trash-can text-danger"></i></a></td>
            <?php
        echo '</tr>';
        }
    echo '</table></div>';

?>
