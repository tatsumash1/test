<?php

require_once __DIR__ . '/../boot.php';
$title = 'Todoist';
$todos = getTodos();

echo view('pages/index',[
    'title' => $title,
    'todos' => $todos,
]);




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
        <main>

            <?php
            foreach ($todos as $todo): ?>
            <article class = "todo">
                <label>
                    <input type="checkbox" <?=($todo['completed']) ? 'checked' : ''; ?>>
                        <!-- if ($todo['completed'])
                        {
                            echo 'checked';
                        }
                    ?>> -->
                    <?=$todo['title'];?>
                </label>
            </article>
            <?php
            endforeach; ?>


            <form action="/" method="post" class = "add-todo">
                <input type="text" placeholder="What to do?">
                <button type="submit">Add</button>
            </form>
        </main>
        <footer>
            &copy; <?= date('Y')?> myproject
        </footer>
    </section>
</body>
</html>