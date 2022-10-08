<?php

require_once 'db_connect.php';

$query = "INSERT INTO tasks(Task) values ('{$_POST['task_content']}')";
$dbcon->query($query);

header("Location: http://todolistapp");