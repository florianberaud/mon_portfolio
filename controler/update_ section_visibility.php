<?php
$pdo = require('../model/connect.php');
if(isset($_POST['update-section'])){
 $home=$_POST['home'] ?? 0;
 $about=$_POST['about'] ?? 0;
 $portfolio=$_POST['portfolio'] ?? 0;
 $resume=$_POST['resume'] ?? 0;
 $services=$_POST['services'] ?? 0;
 $contact=$_POST['contact'] ?? 0;
 $sql = "UPDATE section_control SET ";
 $sql .= "home_section=$home,";
 $sql .= "about_section=$about,";
 $sql .= "resume_section=$resume,";
 $sql .= "portfolio_section=$portfolio,";
 $sql .= "services_section=$services,";
 $sql .= "contact_section=$contact WHERE id=1";
 $statement = $pdo->query($sql);
 if($statement) {
 echo "<script> window.location.href='../admin/index.php'; 
</script>";
 }
}
?>