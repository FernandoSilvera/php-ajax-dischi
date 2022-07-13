<?php 

require "db_album.php";
    
header("Content-Type: application/json");

echo json_encode([
    "page" => 1,
    "tot_pages" => 1,
    "data" => $db_album
]);
?>