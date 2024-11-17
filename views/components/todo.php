<?php

/**
 * @var array $todo 
 */
?>
<article class="todo">
    <label>
        <input type="checkbox" <?= ($todo['completed']) ? 'checked' : ''; ?>>
        <!-- if ($todo['completed'])
                        {
                            echo 'checked';
                        }
                    ?>> -->
        <?= $todo['title']; ?>
    </label>
</article>