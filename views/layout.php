<?php
/**
 * @var string $title
 * @var string $content
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title><?php echo $title; ?></title>
</head>
<body>
    <section class = "content">
        <header>
        <span class = "icon">📝</span>
        <h1><?= $title; ?></h1>
        </header>
        <?= $content; ?>
        <footer>
            &copy; <?= date('Y')?> myproject
        </footer>
    </section>
</body>
</html>