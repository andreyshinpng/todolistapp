<?php

require_once 'php/db_connect.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <title>Todo List Application by andreyshin</title>
</head>
<body>

<header>
    <ul>
        <li><a href="https://github.com/andreyshinpng/todolistapp">Github</a></li>
    </ul>
</header>
<div class="content">
    <div class="todolist_frame">
        <form action="php/new_task.php" method="post" class="new_task_form">
            <input type="text" name="task_content" placeholder="New task"><input type="submit" value="Add Task">
        </form>
        <?php
            $query = "SELECT * FROM tasks ORDER BY Id DESC";
            $result = ($dbcon->query($query));
            foreach ($result as $key => $value) {
                echo "<div class='task_row'>";
                echo "<p>{$value['Task']}</p>";
                echo "<form action='php/delete_task.php' method='post' class='delete_task_form'><input type='hidden' name='delete_id' value='{$value['Id']}'><input type='submit' value='Remove'></form></div>";
            }
        ?>
    </div>
</div>

</body>
</html>