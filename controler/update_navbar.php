
<?php
    // connect to the database to get the PDO instance
        $pdo = require '../include/connect.php';

if (isset($_POST['update_navbar'])) {
    $navbar = $_POST['update_navbar'];
    $text_nom=$_POST['text_nom'];
    $text_apropos=$_POST['text_apropos'];
    $text_competence=$_POST['text_competence'];
    $text_projet=$_POST['text_projet'];
    $text_contact=$_POST['text_contact'];
    

    // Mettre à jour la table navbar

    $sqlQuery = "UPDATE navbar SET text_nom=:nom, text_apropos=:apropos, text_competence=:competence, text_projet=:projet, text_contact=:contact";

    $insertTache = $pdo->prepare($sqlQuery);


    $insertTache->execute([
        'nom' => $text_nom,
        'apropos' => $text_apropos,
        'competence' => $text_competence,
        'projet' => $text_projet,
        'contact' => $text_contact,
    ]);

    header("Location: ../admin/index.php?apropossetting=true");

}
?> 



