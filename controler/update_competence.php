 
<?php
    // connect to the database to get the PDO instance
        $pdo = require '../include/connect.php';

if (isset($_POST['update_competence'])) {
    $competences = $_POST['update_competence'];
    $html=$_POST['html'];
    $css=$_POST['css'];
    $php=$_POST['php'];
    $photoshop=$_POST['photoshop'];
    $illustrator=$_POST['illustrator'];
    $premiere_pro=$_POST['premiere_pro'];
  
    // Mettre à jour la table navbar

    $sqlQuery = "UPDATE competences SET html=:html, css=:css, php=:php, photoshop=:photoshop, illustrator=:illustrator, premiere_pro=:premiere";

$insertTache = $pdo->prepare($sqlQuery);

$insertTache->execute([
    'html' => $html,
    'css' => $css,
    'php' => $php,
    'photoshop' => $photoshop,
    'illustrator' => $illustrator,
    'premiere' => $premiere_pro,
]);
    
    header("Location: ../admin/index.php?apropossetting=true");

}
?> 
