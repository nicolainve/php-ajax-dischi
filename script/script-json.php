<?php require __DIR__ . '/../partials/database.php';

if (! empty($_GET['author'])) {
    foreach ($database as $cd) {
        if ($_GET['author'] == $cd['author']) {
            $filter[] = $cd;
        }   
    }
    $database = $filter;
}

header('Content-Type: application/json');

echo json_encode($database);