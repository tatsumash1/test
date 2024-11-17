<?php

/**
 * @var string $todo
 */
?>
<main>
    <?php
    foreach ($todos as $todo): ?>
        <?= view('components/todo', ['todo' => $todo]); ?>
    <?php endforeach; ?>


    <form action="/" method="post" class="add-todo">
        <input type="text" placeholder="What to do?">
        <button type="submit">Add</button>
    </form>
</main>