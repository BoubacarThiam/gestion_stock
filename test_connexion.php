<?php
require_once  __DIR__. "/src/config/database.php";

$sql = "SELECT * FROM produits";
$stmt = $pdo->query($sql);

// Il faut "récupérer" les données du statement
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($result);
echo "</pre>"; // Correction de </pres> en </pre>
?>