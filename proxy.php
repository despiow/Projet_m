<?php
// Récupérer l'URL de l'API depuis la requête GET
$apiUrl = $_GET['http://172.16.108.120/projet_m/valorant.php'];

// Faire une requête vers l'API
$response = file_get_contents($apiUrl);

// Envoyer les en-têtes appropriés pour permettre les requêtes depuis n'importe quelle origine
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

// Renvoyer les données de l'API
echo $response;
?>
