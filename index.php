<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-ajax-dischi</title>
    <link rel="stylesheet" href="./dist/css/app.css">

</head>

<body>

    <?php include __DIR__ . '/database.php' ?>

    <header class="main-header">
        <div class="container">
            <img src="./images/logo.png" alt="Spotify">
        </div>
    </header>

    <main class="main-content">
        <div class="container">
            <ul class="album-list">
                <?php foreach ($database as $album) { ?>
                    <li>
                        <img src="<?php echo $album['poster'] ?>" alt="<?php echo $album['title'] ?>">
                        <h2><?php echo $album['title'] ?></h2>
                        <h3><?php echo $album['author'] ?></h3>
                        <h4><?php echo $album['year'] ?></h4>
                        <h5><?php echo $album['genre'] ?></h5>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </main>
    
</body>
</html>