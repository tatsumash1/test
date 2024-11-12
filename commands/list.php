<?php

function listCommand(array $arguments)
{
    $todos = getTodos();

        if (empty($todos))
        {
            echo "No todos found.\n";
            return;
        }

        foreach ($todos as $index  => $todo)

        {
            echo sprintf("%s. [%s] %s \n",
            ($index+1),
            $todo['completed'] ? 'X': ' ', 
            $todo ['title']);
        }

}