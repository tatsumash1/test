<?php

function listCommand(array $arguments)
{

    var_dump($arguments);
    $time = null;
    if (!empty($arguments))
    {
        $date = array_shift($arguments);
        $time = strtotime($date);
        IF( $time === false )
        {
            echo "Invalid date format.\n";
            exit(1);
        }
    }
    $todos = getTodosOrFail($time);



        foreach ($todos as $index  => $todo)

        {
            echo sprintf("%s. [%s] %s \n",
            ($index+1),
            $todo['completed'] ? 'X': ' ', 
            $todo ['title']);
        }

}