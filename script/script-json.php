<?php require __DIR__ . '/../partials/database.php';

if (empty($_GET['genre']) === false) {
    foreach ($database as $cd) {
        if ($_GET['genre'] == $cd['genre']) {
            $filter[] = $cd;
        }   
    }
    $database = $filter;
}

header('Content-Type: application/json');

echo json_encode($database);