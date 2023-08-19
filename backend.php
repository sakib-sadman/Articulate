<?php
$api_key = "i0yGGLo4DpjrQU05oX8tgCA7kViwIaMx";
$query = $_GET['query'];
$url = "https://api.nytimes.com/svc/search/v2/articlesearch.json?q=" . $query . "&api-key=" . $api_key;

$response = file_get_contents($url);

header('Content-Type: application/json');
echo $response;
?>
