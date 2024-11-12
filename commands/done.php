<?php

function doneCommand(array $arguments)
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

        $todos[$index] = array_merge($todos[$index], 
        [
            'completed' => true,
            'updated_at' => time(),
            'completed_at' => null,
        ]);
    }

    storeTodos($todos);
}