<?php

require_once __DIR__ . '/../boot.php';

$title = 'Todoist';

// $template = userIsAdmin() ? 'admin-template' : 'default-template';
echo view('layout',[
    'title' => $title,
    'content' => view('pages/index',[
        'todos' => $todos,
    ]),
]);
exit;






















