<?php

require_once __DIR__ . '/../boot.php';
$title = 'Todoist :: Report';

    $allTodos = prepareReportData();

    $totalDays = count($allTodos);

    $totalTasksCount = array_reduce($allTodos, function ($prev, $todos){
        return $prev + count($todos);
    }, 0 );

    $totalCompletedTasksCount = array_reduce($allTodos, function ($prev, $todos){
        $completed = array_filter($todos, fn($todo)=>$todo['completed']);
        return $prev + count($completed);
    }, 0 );

    $dailyTaskCount =   array_map(function($todos){
        return count($todos);
    },$allTodos);

    $maxTasksCount = max($dailyTaskCount);
    $minTasksCount = min($dailyTaskCount);

    $averageTasksCount = 0;
    $averageCompletedTasksCount = 0;

    if($totalDays > 0)
    {
    $averageTasksCount = floor($totalTasksCount / $totalDays);
    $averageCompletedTasksCount = floor($totalCompletedTasksCount / $totalDays);
    }

    $report = [
        "Total days: $totalDays",
        "Total tasks: $totalTasksCount",
        "Total completed tasks: $totalCompletedTasksCount",
        "Min tasks in a day: $minTasksCount",
        "Max tasks in a day: $maxTasksCount",
        "Average task per day: $averageTasksCount",
        "Average completed task per day: $averageCompletedTasksCount",
    ];


    echo view('pages/report',[
        'title' => $title,
        'report' => $report,
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
            <?php foreach ($report as $line):?>

            <p><?= $line;?></p>

            <?php endforeach;?>
        </main>
        <footer>
            &copy; <?= date('Y')?> myproject
        </footer>
    </section>
</body>
</html>