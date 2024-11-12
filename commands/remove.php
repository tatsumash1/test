<?php

function removeCommand(array $arguments)
{
    $todos = getTodos();
    if (empty($todos))
    {
        echo "No todos found.\n";
        return;
    }

    $now = time();

    foreach ($arguments as $num)
    {
        $index = (int)$num - 1;
        if (!isset($todos[$index]))
        {
            continue;
        }

        unset($todos[$index]);

    }

    $todos = array_values($todos);

    storeTodos($todos);
}
