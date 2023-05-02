<?php
    // connect to the database to get the PDO instance
        $pdo = require '../include/connect.php';

if (isset($_POST['update_apropos'])) {
    $a_propos_de_moi = $_POST['update_apropos'];
    echo $a_propos_de_moi;

    // Mettre à jour la table apropos

    $sql = "UPDATE a_propos_de_moi SET text=:texte";

// Préparation
$insertTache = $pdo->prepare($sql);

// Exécution ! 
$insertTache->execute([
    'texte' => $a_propos_de_moi
]);

   


        header("Location: ../admin/index.php?apropossetting=true");
    

}
?> 


